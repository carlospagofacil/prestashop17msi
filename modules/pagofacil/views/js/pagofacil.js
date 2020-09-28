
$(document).ready(function($) {
    createPaymentForm([]);
    $("#select_msi").prop( "disabled", true );

    $("input[name='numeroTarjeta']").on('blur', function () {
        $("#select_msi").prop( "disabled", true );
        getConfiguration( $(this).val(), $("input[name='idSucursal']").val(), $("input[name='monto']").val() );
    });
});

var getConfiguration = function ( creditCardNumber, branchId, companyId ) {

    $.ajax({
        url : 'http://api.core.tech/Woocommerce3ds/Configuration/msi/',
        type: 'GET',
        data: { "creditCardNumber": creditCardNumber, "param15" : branchId, "param16" : companyId },
        success: function ( response ) {
            
            let jsonResponse = JSON.parse(response);
            let items = jsonResponse.configuration;
            items = ( typeof items === "undefined" ) ? [] : items;

            createPaymentForm( items );
            storeConfiguration( items );
        },
        error: function (xhr, status, error) {
            $("#select_msi").prop( "disabled", true );
        }
    });
}

var createPaymentForm = function( items ) {
    $("#select_msi").empty();

    let optionsDefault = `
        <option value="" label="Forma de Pago" selected="selected" disabled="disabled">Forma de Pago</option>
        <option value="00" label="Contado">Contado</option>
    `;
    
    let paymentAmount = $("input[name='monto']").val();
    
    let options = items.map(item => {
        if( validatePaymentAmount( paymentAmount,item ) ){
            return  `<option value="${item.monthlyPayment}">${item.monthlyPayment} Meses</option>`;
        }
    }).join('');
    //console.log( options, paymentAmount );
    $("#select_msi").append( optionsDefault );
    $("#select_msi").append( options );
    $("#select_msi").prop( "disabled", false );
}


var storeConfiguration = function ( items ) {
    let localStorage = window.localStorage;
    localStorage.setItem( 'configurationItems', JSON.stringify( items ) );
}

var validatePayment = function ( month ) {

    if( month == "00" ){
        return true;
    }

    let storeItems = JSON.parse( localStorage.getItem('configurationItems') );
    let configuration = storeItems.find( item => item.monthlyPayment == month );

    let minAmount = parseFloat( configuration.minLimit );
    let maxAmount = parseFloat( configuration.maxLimit );
    let amount = parseFloat( $("#monto_3ds").val() );

    return ( amount >= minAmount ) && ( amount <= maxAmount );
}

var validatePaymentAmount = function ( amount, objectConfiguration ) {
    
    let minPaymentAmount = parseFloat( objectConfiguration.min );
    let maxPaymentAmount = parseFloat( objectConfiguration.max );
    let paymentAmount = parseFloat( amount );
    
    return ( paymentAmount >= minPaymentAmount ) && ( paymentAmount <= maxPaymentAmount );
}

var showMessageValidation = function ( object, isvalid, amount, msi ) {

    $(".message-ql-result").empty();
    if( !isvalid ){
        let paymentAmount = amount.toFixed(2 );
        let divMessage = `
                <h1>La cantidad de $ ${paymentAmount} no se puede pagar a un plazo de ${msi} Meses sin interéses.</h1>
            `;

        $("#procesar").hide();
        $( object ).css("border", "solid 2px #ed1c24");
        $(".message-ql-result").append( divMessage );
    }else{
        $("#procesar").show();
        $( object ).css("border", "");
    }
}
