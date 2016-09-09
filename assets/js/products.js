var self = this ;

window.ajax = function(url, method,body) {
    var fullURL = "http://[::1]/code/" + url;
    var deferred = $.Deferred();
    var settings = {
        type: method,
		contentType: 'application/json',
        dataType: 'json',
        url: fullURL,
        error: function (error) {
            console.log(error);
            deferred.reject(error);
        },
        success: function (response) {
			console.log("done");
            deferred.resolve(response);
        }
    };

    if (body) {
        settings.data = JSON.stringify(body);
    }

    $.ajax(settings);
    return deferred;
};


var createLiElement = function(data){
				$(".productitem").remove();
					$.each(data , function(i, item) {
						var new_li = $('.productitemsample').clone();
						new_li.removeClass("productitemsample");
						new_li.addClass("productitem");
						new_li.css("display", ""); 
						var innerhtml	=  new_li[0].innerHTML.toString().replace("#img_path",item.img_path);
						innerhtml	=  innerhtml.replace("#img_path_a",item.img_path);
						innerhtml	=  innerhtml.replace("#name",item.name);
						innerhtml	=  innerhtml.replace("#link",item.id);
						new_li.html(innerhtml);
						$('.productlist').append(new_li);
					});
}

var filterDataByCretiria = function (data , offset)
{
	var procced = $.grep(data, function( n, i ) {
		return (n.country.indexOf(offset) !== -1) || (n.type.indexOf(offset) !== -1) || (n.size.indexOf(offset) !== -1) || (n.color.indexOf(offset) !== -1)
	});	
	
	if(offset=="")
	{
		procced = data ;
	}
	
	return procced ;
}


var country , type , color , size ; 

var setcountry = function(country){
	this.country = country ;
}

var getcountry  = function (){
	return this.country ;
}

var settype = function(type){
	this.type = type ;
}

var gettype  = function(){
	return this.type ;
}

var setcolor = function(color){
	this.color = color ;
}

var getcolor  = function(){
	return this.color ;
}

var setsize = function(size){
	this.size = size ;
}


var getsize  = function(){
	return this.size ;
}


var filterData = function(data)
{
	var procced = $.grep(data, function( n, i ) {	
		
		var country = ""  , type = ""  , size = ""  , color  =""; 
		
		if(n.country==getcountry()) {
			country = n.country == getcountry()  ;
			country = country + " & " ;
		}
		else{
			if(getcountry() == undefined || getcountry() == "Filter By Origin")
			{
				country = true ;
				country = country + " & " ;
			}
			else{
				country = false ;
				country = country + " & " ;
			}
		}
		
		if(n.type==gettype()) {
			type = n.type==gettype() ;
			type = type + " & " ;
		}
		else{
			if(gettype() == undefined || gettype() == "Filter By Type")
			{
					type = true ;
				type = type + " & " ;
			}
			else{
				type = false ;
			type = type + " & " ;
			}
		}
		
		if(n.size==getsize()) {
			size = n.size==getsize()  ;
			size = size + " & " ;
		}
		else{
			if(getsize() == undefined || getsize() == "Filter By Format")
			{
				size = true ;
				size = size + " & " ;
			}
			else{
				size = false ;
				size = size + " & " ;
			}
			
		}
		
		if(n.color==getcolor()) {
			color = n.color==getcolor() ;
		}
		else{
			if(getcolor() == undefined || getcolor() == "By Color")
			{
				color = true ;
			}
			else{
				color = false ;
			}
		}
		
		var  text2 = country + type +size+ color ;
		
		return  eval(text2)  ;
	});
	
	return procced ;
}

var getproduct = function()
{
	
	
	if (typeof(Storage) !== "undefined") {
		
		if(localStorage.getItem('productitems')){
			
					var data = filterDataByCretiria(JSON.parse(localStorage.getItem('productitems')),$('#searchItem').val()) ;
					data = filterData(data) ;
					createLiElement(data);
		}
		else {
				var body = {country: self.getcountry(), type: self.gettype() , color : self.getcolor , size : self.getsize() };
				
				ajax('productsItem/getproducts', 'POST', body).done(function(data) {
					var dataItems =  data['product_by_condition'];
					localStorage.setItem('productitems',JSON.stringify(dataItems));	
					createLiElement(dataItems);
					 				
				}); 
		}
		
	} else {
		// Sorry! No Web Storage support..
	}
}

getproduct();

$('#country_cat').on('change', function() {
	self.setcountry(this.value) ;
	self.getproduct();
	
	var afterElement = $(this).next() ;
	var elementPrev = afterElement.find('.filter-option');
	$('#spantext').remove();
	var spanText = $('<span id="spantext" style="float:left;color:red;">Searching By This</span>');
	elementPrev.after(spanText);
	
});



$('#type_cat').on('change', function() {
	self.settype(this.value) ;
	self.getproduct();
	
	var afterElement = $(this).next() ;
	var elementPrev = afterElement.find('.filter-option');
	var spanText = $('<span id="spantext" style="float:left;color:red;">Searching By This</span>');
	$('#spantext').remove();
	elementPrev.after(spanText);
	
});


$('#color_cat').on('change', function() {
    self.setcolor(this.value) ;
	self.getproduct();
});

$('#size_cat').on('change', function() {
    self.setsize(this.value) ;
	self.getproduct();
	
	var afterElement = $(this).next() ;
	var elementPrev = afterElement.find('.filter-option');
	var spanText = $('<span id="spantext" style="float:left;color:red;">Searching By This</span>');
	$('#spantext').remove();
	elementPrev.after(spanText);

});


$('#searchItem').keyup(function(e) {
					var data = filterDataByCretiria(JSON.parse(localStorage.getItem('productitems')) , e.target.value) ;
					data = filterData(data) ;
					createLiElement(data);
});
 



