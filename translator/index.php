<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"
        integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <link rel="stylesheet" href="../style.css">

    <title>Interpreter</title>

</head>

<body>
    <h1>Interpreter</h1>




    <!--  -->
    <ul id="example-1">
        <li v-for="item in items" :key="item.message">
            {{ item.message }}
        </li>
    </ul>

<div id="idWord">
  <div v-for="(item, index) in items" :key="item.name">
    {{ index }}: {{ item.name }}
  </div>
</div>


<div id="app">
    <div v-for="(item,index) in arr">
      <span v-if="index == count"> {{ item }} </span>
    </div>


    <button v-on:click="clickOne()">Назад</button>
    <button v-on:click="clickTwo()">Вперед</button>
</div>



<script>

var arr = new Map([
  ['honest', 'честный', 'честный'],
  ['exam', 'экзамен', 'честный'],
  ['to speak', 'подписка', 'честный'],
  ['subcription', 'говорить', 'честный']
]);  

var a = new Vue({
  el: '#app',
  data: {
    arr: Map[1],
    count:0
  },
  // определяйте методы в объекте `methods`
  methods: {
    clickOne: function () {
      this.count--;
    },
    clickTwo: function () {
      this.count++;
    }
  }
})


/*  */
var example1 = new Vue({
            el: '#example-1',
            data: {
                items: [
                    {message: 'honest'},
                    {message: 'subcription'},
                    {message: 'to speak'},
                    {message: 'exam'}
                    
                ]
            }
        })
    new Vue({
  el: '#idWord',
  data: {
    items: [{name: 'honest'}, {name: 'exam'}]
  }
})


/* var a = new Vue({
  el: '#app',
  data: {
    arr:['honest', 'exam', 'subcription', 'to speak'],
    count:0
  },
  // определяйте методы в объекте `methods`
  methods: {
    clickOne: function () {
      this.count--;
    },
    clickTwo: function () {
      this.count++;
    }
  }
}) */




</script>

</body>

</html>