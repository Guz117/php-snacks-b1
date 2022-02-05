const App = new Vue(
  {
    el: '#app',
    data: {
        cars: [],
        textSearch: 'all'
    },
    created() {
        axios.get('http://localhost/settimana%2015%20php/php-snacks-b1/server/controller.php?genre=all')
        .then((result) => {
            this.cars = result.data.results;
        })
        .catch((error) => { console.log(error); });
    },
     methods: {
      changeGenre() {
        console.log(this.textSearch);
        axios.get('http://localhost/settimana%2015%20php/php-snacks-b1/server/controller.php?genre=' + this.textSearch)
          .then((result) => {
          console.log(result);
          this.cars = result.data.results;
        })
        .catch((error) => {
        console.log(error);
      })
      }
    }
  }
);