<!DOCTYPE html>
<html>
<head>
<title>Social Media</title>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
<link href='https://css.gg/comment.css' rel='stylesheet'>
<link href='https://css.gg/menu.css' rel='stylesheet'>
<style>*{
    margin:0;
    padding:0;
    box-sizing:border-box ;
}
body {
    min-height:100rem;
    width:100%;
    background:#f2f2f2;
    font-family: "Poppins", sans-serif;
    color:#777;
    cursor: pointer;
}
.container{
    display: flex;
    flex-direction: column;
    align-items: center;
    min-height:100rem;
    width:100%;
}
.header{
    width:100%;
    height:4rem;
    background:#fff;
    display:flex;
    margin-bottom:1rem;
    position:fixed ;
    z-index:4;
    border-bottom:0.3px solid #ddd;
    box-shadow:0px 0px 5px rgba(0,0,0,0.5);
}
.header-cell{
    width:4rem;
    height:100%;
    display:flex;
    align-items:center ;
    justify-content:center ;
    color:#777;
}
.header div:first-child{
    background: #ff8080;
    color:#fff;
}
.header div:last-child{
    background: #ff8080;
}
.req-no{
    width:1.5rem;
    height:1.5rem;
    background-color:rgb(255, 99, 71);
    color:#fff;
    font-size:0.8rem;
    font-weight:bold ;
    text-align:center ;
    border-radius:50%;
    position:relative ;
    top:-0.3rem;
    left:-0.4rem;
    line-height:1.5rem;
}
.request-container{
    width:100%;
    min-height:15rem;
    position:fixed ;
    top:4rem;
    background-color:#fff;
    z-index:1;
    transition: all ease-out 0.5s;
    display:none ;
}
.request{
    width:100%;
    height:7rem;
    padding:1rem;
    display:flex;
    border:0.5px solid #ddd;
}
.request-name{
    height:100%;
    margin-left:1rem;
}
button{
    padding:.3rem;
    background:#fff;
    outline:0;
    border:1px solid #ddd;
}
.conform{
    background-color:rgb(255, 99, 71);
    color:#fff;
    border:none;
}
.chat-container{
    width:100%;
    min-height:100vh;
    background-color:#fff;
    position:fixed ;
    top:4rem;
    z-index:2;
    display:none;
}
.chat-header{
    width:100%;
    height:4.5rem;
    padding:1rem;
    background:rgb(255, 99, 71);
    color:#fff;
    position:fixed ;
    display:flex;
}
.chat-message{
    width:100%;
    min-height:100rem;
    padding:0.3rem;
    position:relative ;
    top:4rem;
}
.left-chat{
    width:15rem;
    min-height:4rem;
    position:relative ;
    left:0;
    float:left ;
    margin:0.4rem;
}
.left-chat p{
    background:#ddd;
    padding:0.5rem;
    font-size:0.8rem;
    color:#fff;
    border-radius:1rem;
}
.right-chat{
    width:15rem;
    min-height:4rem;
    position:relative ;
    right:0;
    float:right ;
    margin:0.4rem;
}
.right-chat p{
    background:rgb(255, 99, 71);
    padding:0.5rem;
    font-size:0.8rem;
    color:#fff;
    border-radius:0.8rem;
}
.chat-message small {
    float:right ;
}
.chat-input{
    width:100%;
    height:8rem;
    padding:2rem 1rem;
    background-color:#ddd;
    position:fixed ;
    bottom:0;
    display:flex;
}
.chat-text{
    width:80%;
    height:4rem;
    padding:1rem;
    background-color:#fff;
    outline:none ;
    border:none ;
}
#send-btn{
    width:20%;
    height:4rem;
    font-size:2rem;
    color:rgb(255, 99, 71);
    background-color:#fff;
    display:flex;
    align-items:center ;
    justify-content:center ;
}
.profile{
    width:15rem;
    height:16rem;
    padding:1rem;
    position:fixed ;
    top:4rem;
    right:0;
    z-index:1;
    background-color:#fff;
    text-align:center ;
    animation:profile 0.5s linear;
    display:none;
}
@keyframes profile{
    0%{right:-20rem;}
    100%{right:0;}
}
.email,.activity,.sign{
    width:100%;
    height:5rem;
    padding:0.5rem;
    border-bottom:0.5px solid #ddd;
}
.say{
    width:20rem;
    height:5rem;
    background-color:#fff;
    display:flex;
    align-items:center ;
    justify-content:center ;
    margin-bottom:6rem;
    position:relative ;
    top:5rem;
}
.say img{
    border-radius:50%;
    margin-right:1rem;
}
.say input{
    width:15rem;
    height:3rem;
    padding:.3rem 1rem;
    border-radius:2rem;
    box-shadow:inset 0px 0px 5px rgba(0,0,0,0.2);
    outline:0;
    border:none ;
}
.posts{
    width:20rem;
    min-height:20rem;
    padding:1.5rem;
    background:#fff;
    margin-bottom:.7rem;
}
.person{
    width:100%;
    height:5rem;
    display:flex;
    align-items:center ;
    justify-content:center ;
}
.person-pic img{
    border-radius:50%;
}
.person-name{
    width:12rem;
    height:100%;
    padding:0.8rem;
}
.post-subject{
    width:100%;
    height:8.5rem;
    font-size:.9rem;
    text-align:justify ;
}
.post-image{
    width:100%;
    height:10rem;
}
.post-image img{
    width:100%;
    height:100%;
    border-radius:.4rem;
}
.post-btns{
    width:100%;
    height:4rem;
    display:flex;
}
.post-btn{
    width:10rem;
    height:100%;
    display:flex;
    align-items:center ;
    justify-content:center ;
}

.post-btn small {
    margin:.4rem;
}
.heading{
    height:2.3rem;
    font-size:1.2rem;
    color:#555;
}
hr{
    width:2rem;
    border: 1px solid #ff8080;
}
.menu{
    width:11rem;
    height:7.3rem;
    padding:0px 10px;
    background:#fff;
    z-index:1;
    position:absolute ;
    top:16rem;
    right:2rem;
    box-shadow:0px 0px 3px rgba(0,0,0,0.3);
    display:none ;
}
.menu p{
    padding:0.6rem 0.5rem;
    font-size:0.8rem;
    border-bottom:0.5px solid #ddd;
}
.menu p:hover{
    color:#ff0000;
}
.show{
    display: block;
}
 </style>
</head>
<body>
<div class="container">
  <!--header-->
  <div class="header">
    <div class="header-cell"><p>Herz</p></div>
    <div class="header-cell" id="request-btn">
        <i class="fa fa-user-o"></i>
        <p class="req-no">03</p>
    </div>
    <div class="header-cell">
        <i class="fa fa-bell-o"></i>
        <p class="req-no">10</p>
    </div>
    <div class="header-cell" id="chat-section">
        <i class="fa fa-comment-o"></i>
        <p class="req-no">08</p>
    </div>
    <div class="header-cell">
        <i class="fa fa-search"></i>
    </div>
    <div class="header-cell" id="profile-edit">
        <img src="https://i.ibb.co/t28dmYv/IMG-20201231-215113.jpg" width="50rem" height="50rem"/>
    </div>
  </div>
  
  <!--Requests-->
  <div class="request-container" id="request-container">
    <div class="request">
      <div class="request-image">
        <img src="https://i.ibb.co/nrkjCTB/pexels-min-an-1532776.jpg" width="75rem" height="75rem"/>
      </div>
      <div class="request-name">
          <p><b>Hernando</b></p>
          <small>Info Tech</small><br/>
          <button class="conform">Conform</button>
          <button class="delete">Delete</button>
      </div>
    </div>
    <div class="request">
      <div class="request-image">
        <img src="https://i.ibb.co/kKCBbJZ/pexels-tr-n-long-6213148.jpg" width="75rem" height="75rem"/>
      </div>
      <div class="request-name">
          <p><b>Marry Watson</b></p>
          <small>Info Tech</small><br/>
          <button class="conform">Conform</button>
          <button class="delete">Delete</button>
      </div>
    </div>
    <div class="request">
      <div class="request-image">
        <img src="https://i.ibb.co/kQzTnHx/pexels-italo-melo-2379005.jpg" width="75rem" height="75rem"/>
      </div>
      <div class="request-name">
          <p><b>Hernando Bun</b></p>
          <small>Info Tech</small><br/>
          <button class="conform">Conform</button>
          <button class="delete">Delete</button>
      </div>
    </div>
  </div>

<!--chat section-->
  <div class="chat-container" id="chat-container">
    <div class="chat-header">
      <div class="person-pic">
        <img src="https://i.ibb.co/kKCBbJZ/pexels-tr-n-long-6213148.jpg" width="40rem" height="40rem"/>
      </div>
      <div>
        <p style="margin-left:1rem;"><b>Hernando Bun</b></p><small style="margin-left:1rem;">Active now</small>
      </div>
    </div>
    <!--chat messages-->
    <div class="chat-message">
      <div class="left-chat">
        <p>Ethereum Will Pump to 10k</p>
        <small>10 min</small>
      </div>
      <div class="right-chat">
        <p>Lorem Ipsum as their default model text</p>
        <small>5 min</small>
      </div>
      <div class="left-chat">
        <p>Many desktop publishing packages and web page editors</p>
        <small>2 min</small>
      </div>
    </div>
      <!--chat message input-->
    <div class="chat-input">
        <input type="text" class="chat-text" placeholder="Text Message">
        <i class="fa fa-paper-plane" id="send-btn"></i>
    </div>
  </div>

  <!--profile settings-->
  <div class="profile" id="profile">
      <div class="email">
          <h2>Merry Watson</h2>
          <p>example@gmail.com</p>
      </div>
      <div class="activity">
        <p><i class="fa fa-user-o"></i> Profile</p>
        <p><i class="fa fa-envelope-o"></i> Inbox</p>
        <p><i class="fa fa-file-text-o"></i> Activity</p>
      </div>
      <div class="sign">
        <p><i class="fa fa-cog"></i> Settings</p>
        <p><i class="fa fa-lock"></i> Sign out</p>
      </div>
  </div>
  
  
  <!--say someting-->
  <div class="say">
      <img src="https://i.ibb.co/t28dmYv/IMG-20201231-215113.jpg" width="50rem" height="50rem"/>
      <input type="text" placeholder="Say Something">
  </div>
  
  <!--posts section-->
  <div class="posts">
  <!--other person post info-->
    <div class="person">
      <div class="person-pic">
        <img src="https://i.ibb.co/nrkjCTB/pexels-min-an-1532776.jpg" width="50rem" height="50rem"/>
      </div>
      <div class="person-name">
        <p><b>Marry Jenn</b></p><small>20min ago</small>
      </div>
      <div><i class="gg-menu" id="menu-bar"></i></div>
      <!--Menu-->
    </div>
    <div class="menu" id="menu">
    <p>Copy Link To ShareMI</p>
    <p>Edit Post</p>
    <p>Embed ShareMI</p>
  </div>
    <!--about post-->
    <div class="post-subject">
      <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
    </div>
    <!--image post-->
    <div class="post-image">
      <img src="https://i.ibb.co/G22xtZt/beach-1761410-1920.jpg"/>
    </div>
    <!--post like comment and share buttons-->
    <div class="post-btns">
      <div class="post-btn">
        <i class="fa fa-heart-o"></i><small>123</small>
      </div>
      <div class="post-btn">
          <i class="gg-comment"></i><small>23</small>
      </div>
      <div class="post-btn">
          <i class="fa fa-share-alt"></i> <small> 13</small>
      </div>
    </div>
  </div>
  
  
 <div class="posts">
  <!--other person post info-->
    <div class="person">
      <div class="person-pic">
        <img src="https://i.ibb.co/3cS6Vc3/pexels-matheus-bertelli-573299.jpg" width="50rem" height="50rem"/>
      </div>
      <div class="person-name">
        <p><b>Marry Jenn</b></p><small>20min ago</small>
      </div>
      <div><i class="gg-menu" id="menu-bar"></i></div>
      <!--Menu-->
    </div>
    <div class="menu" id="menu">
    <p>Copy Link To ShareMI</p>
    <p>Edit Post</p>
    <p>Embed ShareMI</p>
  </div>
    <!--about post-->
    <div class="post-subject">
      <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
    </div>
    <!--image post-->
    <div class="post-image">
      <img src="https://i.ibb.co/3cS6Vc3/pexels-matheus-bertelli-573299.jpg"/>
    </div>
    <!--post like comment and share buttons-->
    <div class="post-btns">
      <div class="post-btn">
        <i class="fa fa-heart-o"></i><small>123</small>
      </div>
      <div class="post-btn">
          <i class="gg-comment"></i><small>23</small>
      </div>
      <div class="post-btn">
          <i class="fa fa-share-alt"></i> <small> 13</small>
      </div>
    </div>
  </div>
  <div class="posts">
  <!--other person post info-->
    <div class="person">
      <div class="person-pic">
        <img src="https://i.ibb.co/kKCBbJZ/pexels-tr-n-long-6213148.jpg" width="50rem" height="50rem"/>
      </div>
      <div class="person-name">
        <p><b>Marry Jenn</b></p><small>20min ago</small>
      </div>
      <div><i class="gg-menu" id="menu-bar"></i></div>
      <!--Menu-->
    </div>
    <div class="menu" id="menu">
    <p>Copy Link To ShareMI</p>
    <p>Edit Post</p>
    <p>Embed ShareMI</p>
  </div>
    <!--about post-->
    <div class="post-subject">
      <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
    </div>
    <!--image post-->
    <div class="post-image">
      <img src="https://i.ibb.co/jJSMk2h/pexels-paige-deasley-10080993.jpg"/>
    </div>
    <!--post like comment and share buttons-->
    <div class="post-btns">
      <div class="post-btn">
        <i class="fa fa-heart-o"></i><small>123</small>
      </div>
      <div class="post-btn">
          <i class="gg-comment"></i><small>23</small>
      </div>
      <div class="post-btn">
          <i class="fa fa-share-alt"></i> <small> 13</small>
      </div>
    </div>
  </div>
  <div class="posts">
  <!--other person post info-->
    <div class="person">
      <div class="person-pic">
        <img src="https://i.ibb.co/NyJNWMC/pexels-ali-pazani-2747600.jpg" width="50rem" height="50rem"/>
      </div>
      <div class="person-name">
        <p><b>Marry Jenn</b></p><small>20min ago</small>
      </div>
      <div><i class="gg-menu" id="menu-bar"></i></div>
      <!--Menu-->
    </div>
    <div class="menu" id="menu">
    <p>Copy Link To ShareMI</p>
    <p>Edit Post</p>
    <p>Embed ShareMI</p>
  </div>
    <!--about post-->
    <div class="post-subject">
      <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
    </div>
    <!--image post-->
    <div class="post-image">
      <img src="https://i.ibb.co/Tk5xqNH/pexels-luca-dross-9422453.jpg"/>
    </div>
    <!--post like comment and share buttons-->
    <div class="post-btns">
      <div class="post-btn">
        <i class="fa fa-heart-o"></i><small>123</small>
      </div>
      <div class="post-btn">
          <i class="gg-comment"></i><small>23</small>
      </div>
      <div class="post-btn">
          <i class="fa fa-share-alt"></i> <small> 13</small>
      </div>
    </div>
  </div>
  <div class="posts">
  <!--other person post info-->
    <div class="person">
      <div class="person-pic">
        <img src="https://i.ibb.co/2ZG92nS/pexels-fl-vio-santos-4664515.jpg" width="50rem" height="50rem"/>
      </div>
      <div class="person-name">
        <p><b>Marry Jenn</b></p><small>20min ago</small>
      </div>
      <div><i class="gg-menu" id="menu-bar"></i></div>
      <!--Menu-->
    </div>
    <div class="menu" id="menu">
    <p>Copy Link To ShareMI</p>
    <p>Edit Post</p>
    <p>Embed ShareMI</p>
  </div>
    <!--about post-->
    <div class="post-subject">
      <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
    </div>
    <!--image post-->
    <div class="post-image">
      <img src="https://i.ibb.co/2ZG92nS/pexels-fl-vio-santos-4664515.jpg"/>
    </div>
    <!--post like comment and share buttons-->
    <div class="post-btns">
      <div class="post-btn">
        <i class="fa fa-heart-o"></i><small>123</small>
      </div>
      <div class="post-btn">
          <i class="gg-comment"></i><small>23</small>
      </div>
      <div class="post-btn">
          <i class="fa fa-share-alt"></i> <small> 13</small>
      </div>
    </div>
  </div>
  <div class="posts">
  <!--other person post info-->
    <div class="person">
      <div class="person-pic">
        <img src="https://i.ibb.co/KjN4G73/pexels-ali-pazani-3061814.jpg" width="50rem" height="50rem"/>
      </div>
      <div class="person-name">
        <p><b>Marry Jenn</b></p><small>20min ago</small>
      </div>
      <div><i class="gg-menu" id="menu-bar"></i></div>
      <!--Menu-->
    </div>
    <div class="menu" id="menu">
    <p>Copy Link To ShareMI</p>
    <p>Edit Post</p>
    <p>Embed ShareMI</p>
  </div>
    <!--about post-->
    <div class="post-subject">
      <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
    </div>
    <!--image post-->
    <div class="post-image">
      <img src="https://i.ibb.co/wwCHgZk/pexels-sanketh-rao-707322.jpg"/>
    </div>
    <!--post like comment and share buttons-->
    <div class="post-btns">
      <div class="post-btn">
        <i class="fa fa-heart-o"></i><small>123</small>
      </div>
      <div class="post-btn">
          <i class="gg-comment"></i><small>23</small>
      </div>
      <div class="post-btn">
          <i class="fa fa-share-alt"></i> <small> 13</small>
      </div>
    </div>
  </div>
  <div class="posts">
  <!--other person post info-->
    <div class="person">
      <div class="person-pic">
        <img src="https://i.ibb.co/kKCBbJZ/pexels-tr-n-long-6213148.jpg" width="50rem" height="50rem"/>
      </div>
      <div class="person-name">
        <p><b>Marry Jenn</b></p><small>20min ago</small>
      </div>
      <div><i class="gg-menu" id="menu-bar"></i></div>
      <!--Menu-->
    </div>
    <div class="menu" id="menu">
    <p>Copy Link To ShareMI</p>
    <p>Edit Post</p>
    <p>Embed ShareMI</p>
  </div>
    <!--about post-->
    <div class="post-subject">
      <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
    </div>
    <!--image post-->
    <div class="post-image">
      <img src="https://i.ibb.co/kKCBbJZ/pexels-tr-n-long-6213148.jpg"/>
    </div>
    <!--post like comment and share buttons-->
    <div class="post-btns">
      <div class="post-btn">
        <i class="fa fa-heart-o"></i><small>123</small>
      </div>
      <div class="post-btn">
          <i class="gg-comment"></i><small>23</small>
      </div>
      <div class="post-btn">
          <i class="fa fa-share-alt"></i> <small> 13</small>
      </div>
    </div>
  </div>
  
  
  <!--page may you like-->
  <div class="posts">
    <p class="heading"><b>Page You May Like</b></p>
    <hr>
    <div class="person">
      <div class="person-pic">
        <img src="https://i.ibb.co/smZK63C/pexels-pixabay-220453.jpg" width="50rem" height="50rem"/>
      </div>
      <div class="person-name">
        <p><b>Travel World</b></p><small>Adventure</small>
      </div>
      <div><i class="gg-heart"></i></div>
    </div>
    <div class="person">
      <div class="person-pic">
        <img src="https://i.ibb.co/kQzTnHx/pexels-italo-melo-2379005.jpg" width="50rem" height="50rem"/>
      </div>
      <div class="person-name">
        <p><b>Travel World</b></p><small>Adventure</small>
      </div>
      <div><i class="gg-heart"></i></div>
    </div>
    <div class="person">
      <div class="person-pic">
        <img src="https://i.ibb.co/kKCBbJZ/pexels-tr-n-long-6213148.jpg" width="50rem" height="50rem"/>
      </div>
      <div class="person-name">
        <p><b>Travel World</b></p><small>Adventure</small>
      </div>
      <div><i class="gg-heart"></i></div>
    </div>
    <div class="person">
      <div class="person-pic">
        <img src="https://i.ibb.co/nrkjCTB/pexels-min-an-1532776.jpg" width="50rem" height="50rem"/>
      </div>
      <div class="person-name">
        <p><b>Travel World</b></p><small>Adventure</small>
      </div>
      <div><i class="gg-heart"></i></div>
    </div>
  </div>
  
 
  
</div>
</body>
</html>
