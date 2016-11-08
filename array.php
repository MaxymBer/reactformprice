<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<script>  
	  var PRODUCTS = [
  {category: 'Web-разработка', price: '449.99', stocked: true, name: 'Сайт'},
  {category: 'Web-разработка', price: '1.99', stocked: false, name: 'IT консалтинг'},
  {category: 'Печатная продукция', price: '29.99', stocked: true, name: 'Печать буклета А5'},
  {category: 'Печатная продукция', price: '99.99', stocked: true, name: 'Печать на пакете'},
  {category: 'Дизайн', price: '9999.99', stocked: false, name: 'Ночь с дизайнером'},
  {category: 'Дизайн', price: '77.99', stocked: true, name: 'Дизайн буклета'},
  {category: 'Дизайн', price: '3.99', stocked: true, name: 'Баннер'}
];
	/*    var rows = [];
    var lastCategory = null;
    this.props.products.forEach(function(product) {
      if (product.category !== lastCategory) {
        rows.push(<ProductCategoryRow category={product.category} key={product.category} />);
      }
      rows.push(<ProductRow product={product} key={product.name} />);
      lastCategory = product.category;
    });  */
	
	/* var battons=[];
	battons.push("<button>1</button>"); */
	 /*  var buttonListElements = [],
      i;
    
    for(i = 0; i < 5; i = i + 1) {
      buttonListElements.push(<li><button onClick={this.handleClick.bind(this)}>{i}</button></li>);
      //buttonListElements.push(<li><button onClick={this.handleClick}>{i}</button></li>);
    } */
	
	 PRODUCTS.forEach(function(product) {
     console.log(product.category);
    });
	
	
	
	</script>
</body>
</html>