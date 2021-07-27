

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login And registration Form</title>


<style type="text/css">
*{
    margin:0px;
    padding: 0px;
    font-family: 'Abril Fatface', cursive;

}
.container
{
     height: 100%;
    width: 100%;
    background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url(./Images/room.jpg);
    background-size: 100% 100%;
    position: absolute;
}
.form-box
{
    width: 600px;
    height: 700px;
    position: relative;
    margin:  2% auto;
    background: #fff;
    padding: 5px;
    border-radius: 5%;
    overflow: hidden;
}  


    .button-box
{
    width: 220px;
    margin-top: 15px ;
    margin-bottom: 10px;
    margin-left: auto;
    margin-right: auto;
    position: relative;
    box-shadow: 0 0 20px 9px #ff61281f;
    border-radius: 30px;
    text-align: center;
    font-weight: bold;
}
.toggle{
    padding: 10px 30px;
    cursor: pointer;
    background: transparent;
    border: 0;
    outline: none;
    position: relative;
    font-weight: bold;

}
#btn{
    top: 0;
    left: 0;
    position: absolute;
    width: 100%;
    height: 100%;
    background: linear-gradient(to right,#ff105f,#ffad06);
    border-radius: 30px;
    transition: 0.5s;

}
td{
        width: 280px;
        height: 100%;
        text-align: center;
        padding: 3px;
    }
#details{
    text-align: left;
    padding: 5px;
}
#price
{
    font-weight: bolder;
}

</style>

</head>
<body>
    <div class="container">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                
                <button type="button" class="toggle" >Details</button>
            </div><br><br>
            <table  cellpadding="5px">

    <tr ><td rowspan="5"> <img src="./Images/room.jpg" width="250px"> </td>
        <td colspan="2" id="price">$5000</td>
    </tr>
    <tr>
        
        <td colspan="2">1 BHK Unfurnished</td>
    </tr>
    <tr>
        
        <td colspan="2">Kamboj Colony  <a href="">View on map</a></td>
    </tr>
    <tr>
        <td> Owner phone no:<span ></span> </td>
    </tr>
    <tr>
        
        <td>Posted: Today </td>
    </tr>
     <tr>
        
        <td colspan="3">24 hrs Electricity supply <span style="color: darkred;">&</span> 24 hrs water supply</td>
    </tr>
    <tr>
        <td colspan="3" rowspan="4" id="details">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            
        </td>
    </tr>
        </div>
    </div>




</body>
</html>

