$().ready(function() {

  $("#contactForm").validate({
    rules: {
      user_firstname: {
        required: true,
        letter: true,
        number: false,
      },
      user_name: {
        required: true,
        letter: true,
      },
      user_email: {
        required: true,
        laxEmail:true,
        // maxlength: 255,
      },
      user_message: {
        required: true,
        maxlength: 600,
      },
    },

    messages: {

      user_firstname: {
        // number:"Ne peux contenir que des lettres",
        firstname:"Veuillez saisir votre prénom.",

        required: "Ce champ est requis",
      },

      user_name: {
        // number:"Ne peux contenir que des lettres",
        required: "Ce champ est requis",
      },
      user_email: {
        email: "Veuillez entrer votre E-mail",
        required: "Ce champ est requis",
        maxlength:"Ce champ ne peux dépasser 255c",
      },
      user_message: {
        required: "Ce champ est requis",
        maxlength: "Ce champ ne peux dépasser 600c",
      },

    },
  });

  jQuery.validator.addMethod("laxEmail", function(value, element) {
    // allow any non-whitespace characters as the host part
    return this.optional( element ) || /^[a-zA-Z0-9A-Za-zÀÁÂÃÄÅàáâãäåÒÓÔÕÖØòóôõöøÈÉÊËèéêëÇçÌÍÎÏìíîïÙÚÛÜùúûüÿÑñ._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test( value );
  }, '.');


  jQuery.validator.addMethod("letter", function(value, element) {
    // allow any non-whitespace characters as the host part
    return this.optional( element ) || /^[A-Za-zÀÁÂÃÄÅàáâãäåÒÓÔÕÖØòóôõöøÈÉÊËèéêëÇçÌÍÎÏìíîïÙÚÛÜùúûüÿÑñ]/.test( value );
  }, 'Veuillez ne pas mettre de nombre.');

});
