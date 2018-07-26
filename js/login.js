$(document)
    .ready(function() {
      $('.ui.form')
        .form({
          fields: {
            email: {
              identifier  : 'email',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Por favor ingresa tu correo electrónico'
                },
                {
                  type   : 'email',
                  prompt : 'Por favor ingresa un correo electrónico valido'
                }
              ]
            },
            password: {
              identifier  : 'password',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Por favor ingresa tu contraseña'
                }
              ]
            }
          }
        })
      ;
    })
  ;