<!DOCTYPE html>
<html>
  <title>Abhimanyu Kumar</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="HandheldFriendly" content="true">
  <meta name="description" content="Small space about my likes, work and vision in this vast web.">
  <meta name="author" content="Abhimanyu Kumar">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="theme-color" content="#ffffff">
  <style type="text/css">
      @import url('https://fonts.googleapis.com/css2?family=Coda+Caption:wght@800&family=Lato:wght@400;800&family=Roboto:wght@400;800&family=Rajdhani:wght@400;700&family=Sen&display=swap');
      *{
          margin: 0;
          padding: 0;
          box-sizing: border-box;
      }
      body{
          min-height: 90vh;
          background: #CE2D4F;
          background: #FDFFFC;
      }
      a{
          text-decoration:none;
      }
      .dots{
          position: relative;
          display: flex;
          flex-flow: row nowrap;
          justify-content: space-between;
          align-items: center;
          gap: 1rem;
          grid-gap: 1rem;
          overflow:hidden;
          
      }
      .dots .dot{
          width: 120px;
          height: 120px;
          border-radius: 50%;
      }
      .dots .dot:nth-child(1){
          transform: translate(-50%, -25%);
          background: #F1D302;
      }
      .dots .dot:nth-child(2){
          transform: translate(0%, -50%);
          background: #CE2D4F;
      }
      .dots .dot:nth-child(3){
          transform: translate(50%, 0%);
          background: #235789;
      }
      main{
          padding: 1rem;
          color: #020100;
      }
      .text{
          font-family: 'Coda Caption', sans-serif;
      }
      main #name{
          margin-right:1rem;
      }
      .stats{
          font-family: "Rajdhani", sans-serif;
          font-weight: 700;
          letter-spacing: 1px;
          font-size: 1.5rem;
          background: red ;
          color: #fff;
          clip-path: polygon(0 10%, 100% 0, 100% 90%, 0% 100%);
          padding: 50px 1rem;
      }
      .journal{
          padding:0 20px;
          font-family: "Sen", sans-serif;
          color: #808080;
          font-weight:bold;
          transform: rotate(0deg);
          transform-origin: center;
      }
      .journal .title{
          font-size: 1rem;
          /*text-transform: uppercase;*/
          text-align: right;
          font-family: "Rajdhani". sans-serif;
          color: #000;
          margin-bottom: 1rem;
      }
      .journal p {
        border-top: 2px dashed;
        border-color: #800df3 !important;
        margin:0; padding: 30px;
        counter-increment: section;
        position: relative;
      }
      .journal p:nth-child(even):before {
          content: counter(section);
          right: 100%; 
          margin-right: -20px;
          position: absolute;
          border-radius: 50%;
          padding: 10px;
          height: 20px;
          width: 20px;
          background-color: #d81b60;
          text-align:center;
          color: white;
      }
        .journal p:nth-child(odd):before {
          content: counter(section);
          left: 100%; 
          margin-left: -20px;
          position: absolute;
          border-radius: 50%;
          padding: 10px;
          height: 20px;
          width: 20px;
          background-color: #00bfa5;
          text-align:center;
          color: white;
          font-size: 110%;
        }
        .journal p:nth-child(even) {
          border-left: 2px dashed;
          border-top-left-radius: 30px;
          border-bottom-left-radius: 30px;
          margin-right: 30px;
          padding-right: 0;
        }
        .journal p:nth-child(odd) {
          border-right: 2px dashed;
          border-top-right-radius: 30px;
          border-bottom-right-radius: 30px;
          margin-left: 30px;
          padding-left: 0;
        }
        .journal p:first-child {
          border-top: 0;
          border-top-right-radius:0;
          border-top-left-radius:0;
        }
        .journal p:last-child {
          border-bottom-right-radius:0;
          border-bottom-left-radius:0;
        }
      .contact{
          padding: 2rem 1rem;
          text-align: center;
          font-size: 1.1rem;
          font-family: "Sen", sans-serif;
          background:#333;
          color: #fff;
      }
      .contact div{
          padding: 10px;
      }
      .contact h2{
          /*padding: 0 0 1rem 0;*/
      }
      .contact a{
          color: #f5f5f5;
      }
      .projects{
          padding: 1rem;
          text-align: right;
      }
      .projects button{
          padding: 1rem 1.2rem;
          background: #fff;
          border: 2px solid #800df3;
          outline: none;
          color: #800df3;
          font-weight: bold;
          font-family: "Sen", sans-serif;
          box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.18);
          text-transform: uppercase;
          border-radius: 5px;
          transition: all 250ms ease-in-out;
      }
      .projects button:hover{
          background: #800df3;
          color: #fff;
      }
      footer{
          padding: 1rem;
          background: #000;
          color: #fff;
          text-align: center;
          font-family: "Rajdhani", sans-serif;
      }
  </style>
</head>
<body>
    <div class="dots">
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
    </div>
    <main>
        <div class="text">
            <small>SALUTATION</small>
            <h1>Hello</h1>
        </div>
        <div class="text">
            <small>FROM</small>
            <h1 id="name">Abhimanyu</h1>
        </div>
    </main>
    <div class="stats">
        <small>LIFE-STATS:</small>
        <h1 class="about">
            48% front-end, <br/>
            47% back-end, <br>
            5% extras;
        </h1>
    </div>
    <div class="journal">
        <div class="title">Key Momemts</div>
        <p>Born [ 2001 ]</p>
        <p>First Rookie Code Written [ Age 13 ]</p>
        <p>Ongoing B.Sc Electronics [ 2019 - Present ]</p>
        <p>Founded <a href="https://www.myoniv.com" target="_blank">Oniverse</a> [ 2019 - Present ]</p>
    </div>
    <div class="projects">
        <a href="projects.php">
            <button>My Projects</button>
        </a>
    </div>
    <div class="contact">
        <h2>
            contact me here
        </h2>
        <div>
            visit: <a href="https://www.myoniv.com/abhi">myoniv.com/abhi</a>
        </div>
        <span> or </span>
        <div>
            mailto: <a href="mailto:contact@myselfabhi.xyz">contact@myselfabhi.xyz</a>
        </div>
    </div>
    <footer>
        Thought and brought up by <b>Abhimanyu Kumar</b>     
    </footer>
</body>
</html>
