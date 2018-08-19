var express=require('express');
var app=express()
var path=require('path')
var bodyParser=require('body-parser');
var fs = require('fs');

app.use(express.static('.'))
var urlencodedParser = bodyParser.urlencoded({ extended: false })

app.get('/',function(req,resp){
    resp.sendFile('login.html',{root:path.join(__dirname,'.')})
})
app.post('/',urlencodedParser,function(req,resp){
    if(isNaN(req.body.val)){
        console.log("That aint a number m8");
    resp.sendFile('login.html',{root:path.join(__dirname,'.')})
    
    }
    else{
        console.log(req.body.val);
        fs.writeFile("data.txt", req.body.val, function(err) {
            if(err) {
                return console.log(err);
            }
        
            console.log("The file was saved!");
        })
        resp.sendFile('login.html',{root:path.join(__dirname,'.')})
    }
})
// app.post('/changetxt',urlencodedParser, function (req, res) {
//     console.log(req.body.val);
//     res.render('/',{qs: req.query});
//   })
app.post('/change', function(req, res) {
    var a = parseFloat(req.body.val);
    console.log(a)

})
app.listen(4000,function(){
    console.log('listening , at port 4000');
})

