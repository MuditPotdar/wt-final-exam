let Usercart = [
    {
     id: 1,
      name: "Mobile",
      price: 70000,
    },
    {
        id: 2,
      name: "Laptop",
      price: 100000,
    },
    {
        id: 3,
      name: "Airpods",
      price: 26900,
    },
    {
        id: 4,
        name: "Watch",
        price: 30000,
    },
    {
        id: 5,
        name: "Shoes",
        price: 35000,
    },
    {
        id: 6,
        name: "Bag",
        price: 10000,
    },
  ];
  Usercart.sort((a, b) => parseFloat(a.price) - parseFloat(b.price));
  Usercart.sort((a, b) => parseFloat(b.price) - parseFloat(a.price));