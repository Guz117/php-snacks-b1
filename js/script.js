const App = new Vue(
  {
    el: '#app',
    data: {
      cars: []
    },
    created() {
        axios.get('http://localhost/settimana%2015%20php/php-snacks-b1/server/controller.php?genre=all')
        .then((result) => {
            this.cars = result.data;
        })
        .catch((error) => { console.log(error); });
    }
  }
);