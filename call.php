<!DOCTYPE html>
<html>
<head>
<script src="react.js"></script>
<script src="react-dom.js"></script>
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="https://unpkg.com/babel-core@5.8.38/browser.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<style>
.selectOn{
	width:400px;
	float:left;
}
.labelText{
width:100%;
}
.labelText label,.labelText input{
width:100px;
}
.stalicPrice{
	width:200px;
	border:1px solid gray;
	position:fixed;
	right:0;top:0;"
}
</style>
</head>
<body>
<div id="container">
    <!-- This element's contents will be replaced with your component. -->
</div>
<script type="text/babel">
class SomeSum extends React.Component{
	
	
	  render() {
		  //to do - сюда таскать значение из резалт-таблицы
			return <div className="selectOn">{this.props.priceinrow}</div>;
	  }
}
class ProductSelect extends React.Component {

	
  constructor(props, context) {
    super(props, context)
	 this.state = {
	/* 	value: 1 */
	} 
} 

 
  render() {
	  var arrOfOptions =[];
 this.props.category.map(function(currOption,index){
	 arrOfOptions.push(<option key={index}  value={currOption.valOf}  >{currOption.strInfo}</option>);
	});	  
    return <div className="selectOn"><select  onChange={this.props.onClick}  value={this.state.value}>{arrOfOptions}</select></div>;
  }
/*   
 handleClickSelect(){
	 this.setState({ value:  e.target.value });
	 this.props.onClick();
  }  */

}

class DankButton extends React.Component {

	
  constructor(props, context) {
    super(props, context)
    // Good Solution: Bind it in here!
    this.handleClickCheckbox = this.handleClickCheckbox.bind(this)  
    //this.handleClickAdditional = this.handleClickAdditional.bind(this)  
	this.state = {
		allAmount: 0,
		resultPrices:[  
			  {indexid:10,category: 'Web-разработка', baseprice: '449.99', price: '0', stocked: true, name: 'Сайт', formula: 'multi',multinumber:1, needit: false},
			  {indexid:11,category: 'Web-разработка',  baseprice: '1.99',price: '0', stocked: false, name: 'IT консалтинг', formula: 'multi',multinumber:1, needit: false},
			  {indexid:12,category: 'Печатная продукция',  baseprice: '29.99',price: '0', stocked: true, name: 'Печать буклета А5', formula: 'multi',multinumber:1, needit: false},
			  {indexid:13,category: 'Печатная продукция', baseprice: '99.99', price: '0', stocked: true, name: 'Печать на пакете', formula: 'multi',multinumber:1, needit: false},
			  {indexid:14,category: 'Дизайн',  baseprice: '9999.99',price: '0', stocked: false, name: 'Ночь с дизайнером', formula: 'multi',multinumber:1, needit: false},
			  {indexid:15,category: 'Дизайн',  baseprice: '77.99',price: '0', stocked: true, name: 'Дизайн буклета', formula: 'multi',multinumber:1, needit: false},
			  {indexid:16,category: 'Дизайн', baseprice: '3.99', price: '0', stocked: true, name: 'Баннер', formula: 'multi',multinumber:1, needit: false}	
			  ]
	}
  } 
	///////////
	// render
	render(content) { 
		var PRODUCTS = [
	  {indexid:10,category: 'Web-разработка', price: '449.99', stocked: true, name: 'Сайт', arrOfVlue:[{valOf:1,strInfo:'Сайт-визитка'},{valOf:2,strInfo:'Лендинговая страница'},{valOf:5,strInfo:'Портал'}]},
	  {indexid:11,category: 'Web-разработка', price: '1.99', stocked: false, name: 'IT консалтинг', arrOfVlue:[{valOf:1,strInfo:'Умный совет'}, {valOf:10,strInfo:'Выслушать Ваши рассуждения с умным видом'}]},
	  {indexid:12,category: 'Печатная продукция', price: '29.99', stocked: true, name: 'Печать буклета А5', arrOfVlue:[{valOf:1,strInfo:'Тираж до 100'},{valOf:0.9,strInfo:'Тираж более 1000'}]},
	  {indexid:13,category: 'Печатная продукция', price: '99.99', stocked: true, name: 'Печать на пакете', arrOfVlue:[{valOf:'888',strInfo:'46'}]},
	  {indexid:14,category: 'Дизайн', price: '9999.99', stocked: false, name: 'Ночь с дизайнером', arrOfVlue:[{valOf:'888',strInfo:'46'}]},
	  {indexid:15,category: 'Дизайн', price: '77.99', stocked: true, name: 'Дизайн буклета', arrOfVlue:[{valOf:'888',strInfo:'46'}]},
	  {indexid:16,category: 'Дизайн', price: '3.99', stocked: true, name: 'Баннер', arrOfVlue:[{valOf:'888',strInfo:'46'}]}
		];
		var buttonListElements = [];
		var lastCategory = null;
		//var i = 1;

			////////////////
			// child block
			PRODUCTS.map(function(product,index) {
				  if (product.category !== lastCategory) {
					buttonListElements.push(<h3>{product.category}</h3>);
				 }
				
				 //arrOfVlue
							
				  buttonListElements.push(<div key={product.indexid} className="labelText"><input type='checkbox' id={product.indexid}  onClick={this.handleClickCheckbox.bind(null, product.price,index)} value={product.price} /><label   htmlFor={product.indexid}>{product.name} - {product.price}</label>
				<SomeSum priceinrow={product.price} key={product.price} /><ProductSelect onClick={this.removeItem.bind(this,index)} category={product.arrOfVlue} key={product.indexid} /></div>);
				  lastCategory = product.category;
				 // i++;
			}, this);		
			// child block
			////////////////
		return (<div key="mainform"><span>{buttonListElements}</span><hr /><div className="stalicPrice">{this.state.allAmount}</div><hr /><button >Click me!{this.state.buttonNumber}</button></div>);
	}
	// render  
	///////////
	
	  removeItem(indexinarray,event){
		  var valueForMulti = event.target.value;
		  var newArrForFormula = this.state.resultPrices;
		  var basePrice = newArrForFormula[indexinarray].baseprice;
		  newArrForFormula[indexinarray].multinumber = valueForMulti;
		  newArrForFormula[indexinarray].price = parseFloat(valueForMulti) * parseFloat(basePrice);
		 // alert('newArrForFormula[indexinarray].price = ' + newArrForFormula[indexinarray].price);
		  this.setState({ resultPrices: newArrForFormula });
		  
		  this.recountIt();
	  }
				  
	handleClickCheckbox(someval,indexinarray) {
		//alert(this.state.resultPrices[indexinarray].needit == false);
		if(this.state.resultPrices[indexinarray].needit == false) {
			var newArr = this.state.resultPrices;
			//alert(this.state.resultPrices[indexinarray].needit);
			newArr[indexinarray].price = someval;
			newArr[indexinarray].needit = true;
			this.setState({ resultPrices: newArr });
						//alert(this.state.resultPrices[indexinarray].price);
						//alert(this.state.resultPrices[indexinarray].needit);

		} else {
			var newArr = this.state.resultPrices;
			newArr[indexinarray].needit = false;
			this.setState({ resultPrices: newArr });

		}
			this.recountIt();
	} 
  
	recountIt() {
		console.log('set it at last');
		var forAmount = 0;
	this.state.resultPrices.map(function(currentRow,index) {
		if(currentRow.price != 0 && currentRow.needit == true){
			forAmount += (parseFloat(currentRow.price) * parseFloat(currentRow.multinumber));
		}
	});
		
		this.setState({allAmount: forAmount});
			
	}
}

ReactDOM.render(
  <DankButton />,
  document.getElementById('container')
);
</script>
</script>
</body>
</html>