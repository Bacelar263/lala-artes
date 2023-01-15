const mailer = require("nodemailer");

const user = "lala@lalaartes.com";
const pass = "@Ridufu123_";

module.exports = (email, nome, mensagem) => {
    const smtpTransport = mailer.createTransport({
        host: "smtp.hostinger.com",
        port: 465,
        auth: { user, pass }
    })
    
    const mail = {
        from: user,
        to: email,
        subject: `${nome} te enviou uma mensagem`,
        text: mensagem,
        //html: "<b>Opcionalmente, pode enviar como HTML</b>"
    }
    
    return new Promise((resolve, reject) => {
        smtpTransport.sendMail(mail)
            .then(response => {
                smtpTransport.close();
                return resolve(response);
            })
            .catch(error => {
                smtpTransport.close();
                return reject(error);
            });
    })
}