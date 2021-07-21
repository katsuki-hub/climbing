var events = [
  { 'Date': new Date(2021, 5, 29), "Title": "mono 19:00" },
  { 'Date': new Date(2021, 6, 4), "Title": "mono 10：00"},
  { 'Date': new Date(2021, 6, 6), "Title": "ホアホア 19：00"},
  { 'Date': new Date(2021, 6, 10), "Title": "mono 19：00"},
  { 'Date': new Date(2021, 6, 13), "Title": "mono 19：00"},
  { 'Date': new Date(2021, 6, 17), "Title": "mono 19：00"},
  { 'Date': new Date(2021, 6, 20), "Title": "mono 19：00"},
  { 'Date': new Date(2021, 6, 25), "Title": "mono 11：00"},
  { 'Date': new Date(2021, 7, 3), "Title": "男子予選<br>スピード 17:00<br>ボルダリング 18:00<br>リード 21:10"},
  { 'Date': new Date(2021, 7, 4), "Title": "女子予選<br>スピード 17:00<br>ボルダリング 18:00<br>リード 21:10"},
  { 'Date': new Date(2021, 7, 5), "Title": "男子決勝<br>スピード 17:30<br>ボルダリング 18:30<br>リード 21:10"},
  { 'Date': new Date(2021, 7, 6), "Title": "女子決勝<br>スピード 17:30<br>ボルダリング 18:30<br>リード 21:10"},
  { 'Date': new Date(2021, 6, 26), "Title": "バスケットボール<br>男子予選 21：00<br>スペイン戦"},
  { 'Date': new Date(2021, 6, 29), "Title": "バスケットボール<br>男子予選 13：40<br>スロベニア戦"},
  { 'Date': new Date(2021, 7, 1), "Title": "バスケットボール<br>男子予選 13：40<br>アルゼンチン戦"},
  { 'Date': new Date(2021, 7, 7), "Title": "バスケットボール<br>男子決勝戦 11：30"},
  { 'Date': new Date(2021, 6, 23), "Title": "オリンピック開会式"},
  { 'Date': new Date(2021, 7, 8), "Title": "オリンピック閉会式"},
];

var settings = {};
var element = document.getElementById('calendar');
calendar(element, events, settings);