/* pink : e89e9d 
blue: 4bacfd
black: 213f23*/

body {
  background-image: url(sky.png);
  background-repeat: repeat;
  color: white;
  text-align: center;
  font-family: "Rockwell";
}
input[type=text] {
  width: 65%;
  padding: 12px 20px;
  margin: 8px 0;
  
  display: inline-block;
  border: 4px solid rgb(223,158,159);
  box-sizing: border-box;
  font-size: 30px;
  font-family: "Rockwell";
		  
  border-radius: 8px;
  
}::placeholder{
  font-family: "Rockwell";
}

input[type=text]:hover{
  border: 5px solid #4bacfd;
  -webkit-transition: border 1000ms linear;
  -ms-transition: border 1000ms linear;
  transition: border 1000ms linear;
}

.lab{
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 50%;
    color: white;
    font-size: 60px;
    font-family: "Rockwell";
    text-align: center;
    margin-top: 0;
}

.logo{
	display: inline;
    margin-left: auto;
	margin-right: auto;
	width: 400px
}

.qr{
	position: absolute;
	top: 10px;
	right: 10px;
}