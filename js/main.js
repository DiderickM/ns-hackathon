function scrollinto(){
    var myDiv = document.getElementById('main');
    myDiv.scrollIntoView({behavior: "smooth", block: "end", inline: "nearest"});
};

function schrollto(){
    var myDiv = document.getElementById('comment');
    myDiv.scrollIntoView({behavior: "smooth", block: "end", inline: "nearest"});
}

if ('serviceWorker' in navigator) {
    navigator.serviceWorker.register('js/service.js');
  };

  function selectB(x){
      if (x == "Afval"){
          document.getElementById("1").style.backgroundColor = "#3c729b";
          document.getElementById("2").style.backgroundColor = " #55acee";
          document.getElementById("3").style.backgroundColor = " #55acee";
          document.getElementById("4").style.backgroundColor = " #55acee";
          document.getElementById("5").style.backgroundColor = " #55acee";
          document.getElementById("6").style.backgroundColor = " #55acee";
      }else if(x == "Agressie"){
        document.getElementById("1").style.backgroundColor = " #55acee";
        document.getElementById("2").style.backgroundColor = "#3c729b";
        document.getElementById("3").style.backgroundColor = " #55acee";
        document.getElementById("4").style.backgroundColor = "#55acee";
        document.getElementById("5").style.backgroundColor = "#55acee";
        document.getElementById("6").style.backgroundColor = "#55acee";
      }else if(x == "Noodgeval"){
        document.getElementById("1").style.backgroundColor = "#55acee";
        document.getElementById("2").style.backgroundColor = "#55acee";
        document.getElementById("3").style.backgroundColor = "#3c729b";
        document.getElementById("4").style.backgroundColor = "#55acee";
        document.getElementById("5").style.backgroundColor = "#55acee";
        document.getElementById("6").style.backgroundColor = "#55acee";
      }else if(x == "Schade"){
        document.getElementById("1").style.backgroundColor = "#55acee";
        document.getElementById("2").style.backgroundColor = "#55acee";
        document.getElementById("3").style.backgroundColor = "#55acee";
        document.getElementById("4").style.backgroundColor = "#3c729b";
        document.getElementById("5").style.backgroundColor = "#55acee";
        document.getElementById("6").style.backgroundColor = "#55acee";
      }else if(x == "Temperatuur"){
        document.getElementById("1").style.backgroundColor = "#55acee";
        document.getElementById("2").style.backgroundColor = "#55acee";
        document.getElementById("3").style.backgroundColor = "#55acee";
        document.getElementById("4").style.backgroundColor = "#55acee";
        document.getElementById("5").style.backgroundColor = "#3c729b";
        document.getElementById("6").style.backgroundColor = "#55acee";
      }else if(x == "Foute_informatie"){
        document.getElementById("1").style.backgroundColor = "#55acee";
        document.getElementById("2").style.backgroundColor = "#55acee";
        document.getElementById("3").style.backgroundColor = "#55acee";
        document.getElementById("4").style.backgroundColor = "#55acee";
        document.getElementById("5").style.backgroundColor = "#55acee";
        document.getElementById("6").style.backgroundColor = "#3c729b";
      }
      schrollto();
  }