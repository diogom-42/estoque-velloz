$(document).ready( function () {
    $('#table').DataTable();
    $( "#datepicker" ).datepicker({
    dateFormat: "yy-mm-dd",
    dayNames: [
      "Domingo",
      "Segunda",
      "Terça",
      "Quarte",
      "Quinta",
      "Sexta",
      "Sábado"
    ],
    dayNamesMin: ["Dom", "Seg", "Ter", "Qua", "Qui", "Sex", "Sab"],
    monthNames: [
      "Janeiro",
      "Fevereiro",
      "Março",
      "Abril",
      "Maio",
      "Junho",
      "Julho",
      "Agosto",
      "Setembro",
      "Outubro",
      "Novembro",
      "Dezembro"
    ],
    showOn: "button",
    showAnim: 'slideDown',
    showButtonPanel: true,
    autoSize: true,
    buttonImage: "http://jqueryui.com/resources/demos/datepicker/images/calendar.gif",
    buttonImageOnly: true,
    buttonText: "Select date",
    closeText: "Limpar",
    currentText: "Dia atual"

  });
} );