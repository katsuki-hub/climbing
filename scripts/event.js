var events = [
  { 'Date': new Date(2021, 7, 3), "Title": "男子予選<br>スピード 17:00<br>ボルダリング 18:00<br>リード 21:10"},
  { 'Date': new Date(2021, 7, 4), "Title": "女子予選<br>スピード 17:00<br>ボルダリング 18:00<br>リード 21:10<br><br>ZIPROCK<br>SUMMERセッション<br>8/4~8/18"},
  { 'Date': new Date(2021, 7, 5), "Title": "男子決勝<br>スピード 17:30<br>ボルダリング 18:30<br>リード 21:10"},
  { 'Date': new Date(2021, 7, 6), "Title": "女子決勝<br>スピード 17:30<br>ボルダリング 18:30<br>リード 21:10"},
  { 'Date': new Date(2021, 6, 26), "Title": "バスケットボール<br>男子予選 21：00<br>スペイン戦"},
  { 'Date': new Date(2021, 6, 29), "Title": "バスケットボール<br>男子予選 13：40<br>スロベニア戦"},
  { 'Date': new Date(2021, 7, 1), "Title": "バスケットボール<br>男子予選 13：40<br>アルゼンチン戦"},
  { 'Date': new Date(2021, 7, 7), "Title": "バスケットボール<br>男子決勝戦 11：30"},
  { 'Date': new Date(2021, 6, 23), "Title": "オリンピック開会式"},
  { 'Date': new Date(2021, 7, 8), "Title": "オリンピック閉会式"},
  { 'Date': new Date(2021, 6, 15), "Title": "2階マンスリー<br>20本"},
  { 'Date': new Date(2021, 6, 18), "Title": "THE WALL<br>CONPETITION<br>7/18~8/7"},
];

var settings = {};
var element = document.getElementById('calendar');
calendar(element, events, settings);