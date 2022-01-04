var events = [
  { 'Date': new Date(2022, 0, 10), "Title": "成人の日"},
  { 'Date': new Date(2021, 8, 15), "Title": "2階マンスリー<br>20本公開"},
  { 'Date': new Date(2021, 8, 8), "Title": "95度＆110度壁<br>ホールドチェンジ"},
  { 'Date': new Date(2021, 7, 3), "Title": "男子予選<br>スピード 17:00<br>ボルダリング 18:00<br>リード 21:10"},
  { 'Date': new Date(2021, 7, 4), "Title": "女子予選<br>スピード 17:00<br>ボルダリング 18:00<br>リード 21:10<br><br>ZIPROCK<br>SUMMERセッション<br>8/4~8/18"},
  { 'Date': new Date(2021, 7, 5), "Title": "男子決勝<br>スピード 17:30<br>ボルダリング 18:30<br>リード 21:10"},
  { 'Date': new Date(2021, 7, 6), "Title": "女子決勝<br>スピード 17:30<br>ボルダリング 18:30<br>リード 21:10"},
  { 'Date': new Date(2021, 6, 23), "Title": "オリンピック開会式"},
  { 'Date': new Date(2021, 7, 8), "Title": "オリンピック閉会式"},
];

var settings = {};
var element = document.getElementById('calendar');
calendar(element, events, settings);