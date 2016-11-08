<!DOCTYPE html>
<html>
<head>
<script src="react.js"></script>
<script src="react-dom.js"></script>
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="https://unpkg.com/babel-core@5.8.38/browser.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  /* Note: Try to remove the following lines to see the effect of CSS positioning */
  .affix {
      top: 0;
right:0;

  }

  .affix + .container-fluid {
      padding-top: 70px;
  }
  </style>
<style>
.selectOn{
	width:200px;
	float:right;
}
.labelText{
width:600px;
}
</style>
</head>
<body>
<div class="container-fluid" style="background-color:#F44336;color:#fff;height:200px;">
  <h1>AGV forever</h1>
</div>

<nav style="width:400px;float:right;" class="navbar navbar-inverse" data-spy="affix" data-offset-top="197">
  <ul class="nav navbar-nav">
    <li class="active"><a href="#">Basic Topnav</a></li>
    <li><a href="#">Page 1</a></li>
    <li><a href="#">Page 2</a></li>
    <li><a href="#">Page 3</a></li>
  </ul>
</nav>

<div  id="container" class="container-fluid" style="height:1000px">
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

    this.handleClickCheck = this.handleClickCheck.bind(this)  
	
  } 

 
  render() {
	  var arrOfOptions =[];
	  var forName =  this.props.category[0].valOf;
 this.props.category.map(function(currOption,index){
	 
	 arrOfOptions.push(<div><input type="radio" name={forName} value={currOption.valOf}  onSomeEvent ={this.handleClickCheck.bind(null, currOption.valOf,index)} /><label>{currOption.strInfo}</label></div>);
	},this);	  
    return <div className="selectOn"   ><div   >{arrOfOptions}</div></div>;
  }
  
  handleClickCheck(){
	alert('go forMulti=');
  } 	 
	 
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
			  {indexid:10,category: 'Web-разработка', price: '0', stocked: true, name: 'Сайт', formula: 'multi',monumber:'0', needit: false},
			  {indexid:11,category: 'Web-разработка', price: '0', stocked: false, name: 'IT консалтинг', formula: 'multi',monumber:'0', needit: false},
			  {indexid:12,category: 'Печатная продукция', price: '0', stocked: true, name: 'Печать буклета А5', formula: 'multi',monumber:'0', needit: false},
			  {indexid:13,category: 'Печатная продукция', price: '0', stocked: true, name: 'Печать на пакете', formula: 'multi',monumber:'0', needit: false},
			  {indexid:14,category: 'Дизайн', price: '0', stocked: false, name: 'Ночь с дизайнером', formula: 'multi',monumber:'0', needit: false},
			  {indexid:15,category: 'Дизайн', price: '0', stocked: true, name: 'Дизайн буклета', formula: 'multi',monumber:'0', needit: false},
			  {indexid:16,category: 'Дизайн', price: '0', stocked: true, name: 'Баннер', formula: 'multi',monumber:'0', needit: false}	
			  ]
	}
  } 
	///////////
	// render
	render(content) { 
		var PRODUCTS = [
	  {indexid:10,category: 'Web-разработка', price: '449.99', stocked: true, name: 'Сайт', arrOfVlue:[{valOf:1,strInfo:'Сайт-визитка'},{valOf:2,strInfo:'Лендинговая страница'},{valOf:5,strInfo:'Портал'}]},
	  {indexid:11,category: 'Web-разработка', price: '1.99', stocked: false, name: 'IT консалтинг', arrOfVlue:[{valOf:'888',strInfo:'46'}]},
	  {indexid:12,category: 'Печатная продукция', price: '29.99', stocked: true, name: 'Печать буклета А5', arrOfVlue:[{valOf:'888',strInfo:'46'}]},
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
							
				  buttonListElements.push(<div key={product.indexid} className="labelText"  ><input type='checkbox' id={product.indexid}  onClick={this.handleClickCheckbox.bind(null, product.price,index)} value={product.price} /><label   htmlFor={product.indexid}>{product.name} - {product.price}</label>
				<SomeSum priceinrow={product.price} key={product.price} /><ProductSelect category={product.arrOfVlue} key={product.indexid} /></div>);
				  lastCategory = product.category;
				 // i++;
			}, this);		
			// child block
			////////////////
		return (<div key="mainform"><span>{buttonListElements}</span><hr /><div>{this.state.allAmount}</div><hr /><button >Click me!{this.state.buttonNumber}</button></div>);
	}
	// render  
	///////////

				  
	handleClickCheckbox(someval,indexinarray) {
		alert(this.state.resultPrices[indexinarray].needit == false);
		if(this.state.resultPrices[indexinarray].needit == false) {
			var newArr = this.state.resultPrices;
			alert(this.state.resultPrices[indexinarray].needit);
			newArr[indexinarray].price = someval;
			newArr[indexinarray].needit = true;
			this.setState({ resultPrices: newArr });
						alert(this.state.resultPrices[indexinarray].price);
						alert(this.state.resultPrices[indexinarray].needit);
			this.recountIt();
		} else {
			var newArr = this.state.resultPrices;
			newArr[indexinarray].needit = false;
			this.setState({ resultPrices: newArr });
			this.recountIt();
		}

	} 
  
	recountIt() {
		console.log('set it at last');
		var forAmount = 0;
	this.state.resultPrices.map(function(currentRow,index) {
		if(currentRow.price != 0 && currentRow.needit == true){
			forAmount += parseFloat(currentRow.price);
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