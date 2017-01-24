/**
 * Created by sophieseigneuret on 17/01/17.
 */
/* DATEPICKER */
// ajouter 1 jour au datepicker début et fin de saison
var min_date = new Date(forfait_voulu.debut_saison);
min_date.setDate(min_date.getDate()+1);
var max_date = new Date(forfait_voulu.fin_saison);
max_date.setDate(max_date.getDate()+1);
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

/* VALIDER DATEPICKER */
var champ_datepicker = $("#datepicker");
var img_calendrier = $("#resa_client button");
if (champ_datepicker.val().trim().length < MIN_NB_CAR) {
    champ_datepicker.addClass("error");  // ajoute la classe error
    if (!champ_datepicker.next().is(".error_msg")) {
        img_calendrier.after("<p class='error_msg'>Champ obligatoire</p>");  // ajoute un paragraphe de message apres l'element input
    }
    formulaire_valide = false;
} else {
    champ_datepicker.removeClass("error");
    img_calendrier.next(".error_msg").remove();
}