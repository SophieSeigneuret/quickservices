/**
 * Created by sophieseigneuret on 17/01/17.
 */
"use strict";

$(function () {
    /* DATEPICKER */
    var champ_datepicker = $("#datepicker");
    var img_calendrier = $("#formulaire button");
// ajouter 1 jour au datepicker début et fin de saison
    var min_date = new Date(forfait_voulu.debut_saison);
    min_date.setDate(min_date.getDate() + 1);
    var max_date = new Date(forfait_voulu.fin_saison);
    max_date.setDate(max_date.getDate() + 1);
// rajout du datepicker jQuery
    $("#datepicker").datepicker({
        showOn: 'button',
        buttonImage: 'images/calendar_icon.gif',
        numberOfMonths: 2,
        showButtonPanel: true,
        dateFormat: "dd-mm-yy",
        minDate: min_date,
        maxDate: max_date
    });
});


