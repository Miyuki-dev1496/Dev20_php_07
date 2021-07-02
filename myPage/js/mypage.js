


// Your web app's Firebase configuration
var firebaseConfig = {
    apiKey: "",
    authDomain: "devmypage-681ee.firebaseapp.com",
    databaseURL: "https://devmypage-681ee-default-rtdb.firebaseio.com",
    projectId: "devmypage-681ee",
    storageBucket: "devmypage-681ee.appspot.com",
    messagingSenderId: "939106238125",
    appId: "1:939106238125:web:dc9c7879ccbd194d7a1024"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);


   //firebaseのデーターベース（保存させる場所）
   const newPostRef = firebase.database().ref();

    

    // 送信ボタンをクリックされたら次の処理をする
    $("#send").on("click", function () {
        console.log(1);

    let getDate = $("#date").val();
    let getHotelName = $("#hotel").val();
    let getLink = $("#link").val();
    // let getRate = $("#rate").val();
    let getRate = $('input[name="score"]').val();
    
    // if (hotelName === 0){
    //     alert("入力されていません");
    //     return;
    // }
    //データを登録でObjectで送る
    newPostRef.push({
        daterecord:getDate, //日付
        hotelname:getHotelName, //ホテル名
        link:getLink, //リンク
        comment: $("#comment").val(), //感想
        rate:getRate //レート
      })
      
      $("date").val("");//空にする
      $("#hotel").val("");//空にする
      $("#link").val(""); //空にする
      $("#comment").val(""); //空にする
      $("#rate").val(""); //空にする

});
   
// 受信処理
newPostRef.on("child_added", function (data) {
      let v = data.val(); //ここに保存されたデータが全て入ってくる
      // let k = data.key; //今回は無視

      // console.log(v);

      //テンプレートリテラルを利用
      let str = 
      `<div class="output_container">
      <ul>
      <li classs="date">${v.daterecord}</li>
      <li class="hotelname">${v.hotelname}</li>
      <li><iframe class="website" src="${v.link}"></iframe></li>
      <li class="raterecord">${v.rate}</li>
      <li class="commentbox">${v.comment}</li>
      </ul>
      </div>`;

      $("#output").prepend(str);

    })


    //enter keyを押したら送信処理をする

    $("#text").on("keydown", function (e) {
      //eはeventの省略　　何かを実行してそこで何かをしたい時に使う
      console.log(e,'eventデータの塊')

      if(e.keyCode ===13){
        //送信処理を実行する

        newPostRef.push({
        daterecord : getDate, //日付   
        hotelname:getHotelName, //ホテル名
        link:getLink, //リンク
        comment: $("#comment").val(), //感想
        rate:getRate //レート
      })
      
      $("date").val("");//空にする
      $("#hotel").val("");//空にする
      $("#link").val(""); //空にする
      $("#comment").val(""); //空にする
      $("#rate").val(""); //空にする
      }

    })



// map

// var mymap = L.map('mapid').setView([51.505, -0.09], 13);

// L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
// attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
// maxZoom: 18,
// id: 'mapbox/streets-v11',
// tileSize: 512,
// zoomOffset: -1,
// accessToken: 'pk.eyJ1IjoibmlldmVoIiwiYSI6ImNrcDhtamVtdTA5d20ybnBuOWNwZXAyNXYifQ._Tfqvlq9wqxhlvanhBh1Hw'
// }).addTo(mymap);

// var marker = L.marker([51.5, -0.09]).addTo(mymap);

//star rating

// $(function(){
//     $('#rate').raty();
   
//   });

// var score = $(function(){
    // $('#rate').raty(
    //     {
    //         click: function(score, evt) {
    //          console.log(this); //これでどの要素をクリックしたか取れます
    //          console.log(this.id); //idが取れます
    //          console.log(score); //設定したスコアが取れます
    //              // alert("score: " + score + "\nevent: " + evt.type);
    //         }
    //     }
    // );
    
   
// });


//star rating

var currentScore=$('#rate').raty('score');
console.log(currentScore);

// var currentScore=$('.raterecord').raty('score');
// console.log(currentScore);



let getRecordedScore = $("raterecord").raty(

        // readOnly:true,
        // number: 5,
        // score : "Score",

);
       



let Score = function (data) {
    let v = data.val();
}

// {
//     readOnly:true,
//     size : 20,
//     score:
// });







// let score =
// $(function(){
//     $("#rate").raty('score');
//     console.log(score);
// });

// $('#rate').raty({
//     click: function(score, evt) {
//      console.log(this); //これでどの要素をクリックしたか取れます
//      console.log(this.id); //idが取れます
//      console.log(score); //設定したスコアが取れます
//          // alert("score: " + score + "\nevent: " + evt.type);
//     }
// });


    