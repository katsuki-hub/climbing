var events = [
  { 'Date': new Date(2022, 4, 5), "Title": "こどもの日"},
  { 'Date': new Date(2022, 4, 4), "Title": "みどりの日"},
  { 'Date': new Date(2022, 4, 3), "Title": "憲法記念日"},
  { 'Date': new Date(2022, 3, 29), "Title": "昭和の日"},
  { 'Date': new Date(2022, 2, 21), "Title": "春分の日"},
  { 'Date': new Date(2022, 1, 23), "Title": "天皇誕生日"},
  { 'Date': new Date(2022, 1, 11), "Title": "建国記念の日"},
  { 'Date': new Date(2022, 1, 2), "Title": "95度・110度 ホールドチェンジ"},
  { 'Date': new Date(2022, 0, 10), "Title": "成人の日"},
  { 'Date': new Date(2021, 6, 23), "Title": "オリンピック開会式"},
  { 'Date': new Date(2021, 7, 8), "Title": "オリンピック閉会式"},
];

var settings = {};
var element = document.getElementById('calendar');
calendar(element, events, settings);