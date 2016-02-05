##Configurar Mailgun -> Dominio
###Pasos en Mailgun
* Crear dominio custom
* Grabar en el DNS del dominio los registros txt,CNAME y MX que nos da Mailgun (MX nombre es el mismo que el custom domain de Mailgun)
* Verificar los cambios DNS desde Mailgun
* Ir a Routes, crear new route (Filter=Catchall(),Actions=Fordward('correo@correo.com')
* Desde los datos del dominio -> manage SMTP credentials y añadir un usuario nuevo y contraseña

###Pasos en Gmail
* Config->Cuentas e importacion -> Añadir otra direccion de correo
* Nombre= el que se quiera, Correo= usuarioSMTPMaigun@dominioMailgun.com, SMTP=smtp.maigun.org, SMTP User=correo
* Verificar datos con correo de validacion
###https://documentation.mailgun.com/quickstart-sending.html#how-to-start-sending-email
