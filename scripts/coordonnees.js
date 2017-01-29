/**
 * Created by sophieseigneuret on 27/01/17.
 */
"use strict";

/* AFFICHER NUMERO TEL DANS PAGE DETAIL */
$( function() {
    $( "#dialog" ).dialog({
        autoOpen: false,
        show: {
            effect: "blind",
            duration: 200
        },
        hide: {
            effect: "clip",
            duration: 200
        }
    });

    $( "#opener" ).on( "click", function() {
        $( "#dialog" ).dialog( "open" );
    });
} );