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
#container select{
	height: 30px;
    margin-top: -10px;
    width: 80%;  
}
.stalicPrice{
	width:300px;
	height:500px;
	border:1px solid gray;
	/* position:fixed; */
position:absolute;
	right:40px;
	top:50px;
	border-radius:20px;
padding:10px;
background-color:white;
}
.bcwhite{
	background-color:white;
}
.bcgray{
	background-color:gray;
	height:50px;
	padding-top:15px;
	border-bottom:1px solid #b6b6bb;
}
.checkboxforprice{
display:block;
margin-right:20px !important;
float:left;
}
</style>
</head>
<body>
<div class="tabbable">
	<ul class="nav nav-tabs">
		<li class="active"><a href="#tab10" data-toggle="tab">AGV</a></li>
		<li><a href="#tab20" data-toggle="tab">AGV lab</a></li>
	</ul>
	<div class="tab-content" style="background-color:#f1f3f7;padding:20px;">
		<div class="tab-pane active" id="tab10">
			<div id="container">
			</div>
		</div>
		<div class="tab-pane" id="tab20">
			<p>AGV lab...</p>
		</div>
	</div>
</div>


<div id="container">
    <!-- This element's contents will be replaced with your component. -->
</div>
<script type="text/babel">
class SomeSum extends React.Component{
	
	
	  render() {
		  //to do - сюда таскать значение из резалт-таблицы
			return <div>{this.props.priceinrow}</div>;
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
/* 	 if (this.props.category=='input') {
		 return <div><input type="text"  onChange={this.props.onClick}  value={this.state.value}/></div>;
	 } else { */
		 var arrOfOptions =[];
		 this.props.category.map(function(currOption,index){
		 arrOfOptions.push(<option key={index}  value={currOption.valOf}  >{currOption.strInfo}</option>);
		});
		return <div><select onChange={this.props.onClick}  value={this.state.value}>{arrOfOptions}</select></div>;
	 /* } */
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
			  {indexid:10,category: 'Вводные данные', baseprice: '0', price: '0', stocked: true, name: 'Укажите длительность Программы', formula: 'multi',multinumber:1, needit: false},
			  {indexid:11,category: 'Вводные данные',  baseprice: '0', price: '0', stocked: false, name: 'IT консалтинг', formula: 'multi',multinumber:1, needit: false},
			  {indexid:12,category: 'Печатная продукция',  baseprice: '29.99',price: '0', stocked: true, name: 'Печать буклета А5', formula: 'multi',multinumber:1, needit: false},
			  {indexid:13,category: 'Печатная продукция', baseprice: '99.99', price: '0', stocked: true, name: 'Печать на пакете', formula: 'multi',multinumber:1, needit: false},
			  {indexid:14,category: 'Дизайн',  baseprice: '9999.99',price: '0', stocked: false, name: 'Ночь с дизайнером', formula: 'multi',multinumber:1, needit: false},
			  {indexid:15,category: 'Дизайн',  baseprice: '77.99',price: '0', stocked: true, name: 'Дизайн буклета', formula: 'multi',multinumber:1, needit: false},
			  {indexid:16,category: 'Призовой фонд', baseprice: '3.99', price: '0', stocked: true, name: 'Поощрения сотрудников дистрибьюторов (супервайзеров)', formula: 'multi',multinumber:1, needit: false}	
			  ]
	}
  } 
	///////////
	// render
	render(content) { 
		var PRODUCTS = [
			{
				indexid:10,
				usecheckbox:false,
				category: 'Web-разработка', 
				showwordprefix:'', 
				comment:'no comments', 
				price: '', 
				stocked: true, 
				name: 'Укажите длительность Программы', 
				arrOfVlue:[{valOf:1,strInfo:'1-3 месяца'},{valOf:2,strInfo:'4-6 месяцев'},{valOf:5,strInfo:'более 6 месяцев'}]
			},
	  
	  {indexid:11,usecheckbox:true,category: 'Web-разработка', showwordprefix:'от', comment:'some comment text', price: '1.99', stocked: false, name: 'Укажите кол-во дистрибъюторов', arrOfVlue:'inputdistributor'},
	  
	  {indexid:12,usecheckbox:true,category: 'Печатная продукция', showwordprefix:'от', comment:'some comment text', price: '29.99', stocked: true, name: 'Печать буклета А5', arrOfVlue:[{valOf:1,strInfo:'Тираж до 100'},{valOf:0.9,strInfo:'Тираж более 1000'}]},
	  {indexid:13,usecheckbox:true,category: 'Печатная продукция', showwordprefix:'от', comment:'some comment text', price: '99.99', stocked: true, name: 'Печать на пакете', arrOfVlue:[{valOf:'888',strInfo:'46'}]},
	  {indexid:14,usecheckbox:true,category: 'Дизайн', showwordprefix:'от', comment:'some comment text', price: '9999.99', stocked: false, name: 'Ночь с дизайнером', arrOfVlue:[{valOf:'888',strInfo:'46'}]},
	  {indexid:15,usecheckbox:true,category: 'Дизайн', showwordprefix:'от', comment:'some comment text', price: '77.99', stocked: true, name: 'Дизайн буклета', arrOfVlue:[{valOf:'888',strInfo:'46'}]},
	  {indexid:16,usecheckbox:true,category: 'Призовой фонд', showwordprefix:'от', comment:'some comment text', price: '3.99', stocked: true, name: 'Поощрения сотрудников дистрибьюторов (супервайзеров)', arrOfVlue:[{valOf:'888',strInfo:'46'}]}
		];
		var buttonListElements = [];
		var lastCategory = null;
		//var i = 1;
	
			////////////////
			// child block
			PRODUCTS.map(function(product,index) {
				//UNIC FORMULA
				var usersControlFormula = [];
				if (product.arrOfVlue=='inputdistributor') {
					usersControlFormula.push(<div><input type="text"  onChange={this.setDistributorQuantiy.bind(this,index)}  value={this.state.value}/></div>);
				} else {		
					usersControlFormula.push(<ProductSelect onClick={this.changeItemPriceMulti.bind(this,index)} category={product.arrOfVlue} key={product.indexid} />);
				}
				
				//USE OR NOT checkbox
				var useOrNotCheckbox = []
				if (product.usecheckbox) {
					useOrNotCheckbox
				}
				  if (product.category !== lastCategory) {
					buttonListElements.push(<div className="row bcwhite"><div className="col-md-12"><h3>{product.category}</h3></div></div>);
				 }
				//check prefix and set if exist
				if (product.showwordprefix != '') {	
					var pricewithprefix = product.showwordprefix + ' ' + product.price;
				} else {
					pricewithprefix = product.price;
				}
				
				  buttonListElements.push(
				  <div  key={product.indexid} className="row" title={product.comment}>
					<div className="col-md-5 bcgray">
						<input className='checkboxforprice' type='checkbox' id={product.indexid}  onClick={this.handleClickCheckbox.bind(null, product.price,index)} value={product.price} />
						<label   htmlFor={product.indexid}>{product.name}</label>
					</div>
					
					<div className="col-md-5 bcgray">{usersControlFormula}</div>
					
					<div className="col-md-2 bcgray"><SomeSum priceinrow={pricewithprefix} key={product.price} /></div>

				</div>);
				  lastCategory = product.category;
				 // i++;
			}, this);		
			// child block
			////////////////
		return (<div  className="row" key="mainform">
					<div className="col-md-8">{buttonListElements}</div>
					<div className="col-md-4">
						<div className="stalicPrice">{this.state.allAmount}</div>
						<button type="button" className="btn btn-danger">Click me!{this.state.buttonNumber}</button>
					</div>
				</div>);
	}
	// render  
	///////////
	
	setDistributorQuantiy(indexinarray,event){
		  var valueForDistributorPrice = event.target.value;
		  var newArrForFormula = this.state.resultPrices;
		  
	}
		/***
		set new value for multinumber in state array (resultPrices) by indexinarray
		arg1 indexinarray - element index
		arg2 event - get value from event
		*/
	  changeItemPriceMulti(indexinarray,event){
		  var valueForMulti = event.target.value;
		  var newArrForFormula = this.state.resultPrices;
		  var basePrice = newArrForFormula[indexinarray].baseprice;
		  newArrForFormula[indexinarray].multinumber = valueForMulti;
		  newArrForFormula[indexinarray].price = parseFloat(valueForMulti) * parseFloat(basePrice);
		 // alert('newArrForFormula[indexinarray].price = ' + newArrForFormula[indexinarray].price);
		  this.setState({ resultPrices: newArrForFormula });
		  
		  this.recountIt();
	  }
	/***
	set new value for 1) checked\anchecked info and 2) price (someval) value in state array with prices (resultPrices) by index (indexinarray)
	arg1 someval - new value from user control
	arg2 indexinarray - index of array for current price change
	*/
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
	/***
	set new value for state prices (resultPrices)
	*/
	recountIt() {
		console.log('set it at last');
		var forAmount = 0;
	this.state.resultPrices.map(function(currentRow,index) {
		//if(currentRow.price != 0 && currentRow.needit == true){
		if(currentRow.needit == true){
			forAmount = (parseFloat(forAmount) + parseFloat(currentRow.baseprice)*parseFloat(currentRow.multinumber)).toFixed(2);
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