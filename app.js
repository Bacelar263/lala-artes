const express = require("express");
const bodyParser = require('body-parser')
const app = express();
const path = require('path');
const porta = 5000;
const router = express.Router();

app.use(bodyParser.urlencoded({ extended: true }))

app.use(express.static('views'))

app.set('view engine', 'ejs')

app.get('/', function(req, res){
    res.render('index.ejs');
})

app.post('/enviar', (req, res, next) => { 
    const nome = req.body.nome;
    const email = req.body.email;
    const mensagem = req.body.mensagem;
    require("./nodemail")(email, nome, mensagem)
        .then(response => res.redirect(`/`))
        .catch(error => res.json(error)); 

});

app.listen(porta, console.log(`Servidor rodando na porta ${porta}`));