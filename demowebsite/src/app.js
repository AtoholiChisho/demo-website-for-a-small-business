const express = require("express");
const app = express();
const port = process.env.PORT || 3000;

//routing
app.get("/",(req,res)=>{
    res.send("hi i am atoholi");
})
//server create
app.listen(port, () => {
    console.log(`server is running at port no ${port}`);
})