/*
 * WEEshop app ENGINE v 1.7a: light weight script.
 *
 * Requires either jQuery or YUI3.
 *
 * Copyright (c) 2014-2016 Weeble Group. All rights reserved. For license, see "README" or "LICENSE" file.
 * Commerce license: vip-velik.ru.
 * @author info@weeble.pro April 2016
 *
 */
(function() {
  "use strict";
	var JSONData, // Массив товаров
		cart, // Массив id товаров
		counter=$(".badge.badge-sea.rounded-x"),
		cartList,cartCounter,summa;
	var products=[]; // products array
	var id,qty,size,color,item; // products parametrs
	var img,span,div,li,btn,small,docfrag; // cart elements for render
	var tr,td,td1,td2,td3,td4,td5,h3,btn1,btn2,input; // checkout vars
	var myExp,search; // renderInfo vars
	function overDel () {
			setTimeout(function(){
				$('#loading').addClass('animated fadeOut');
				setTimeout(function() {	
					$('#loading').remove();
					shop.JSONData(); // получение списка товаров
					shop.btnClose(); // инициализация кнопок удаления из корзины
					shop.btnCart(); // инициализация кнопки в корзину
					shop.cartCount();
					shop.initScrollBar();
					shop.clearCart();	
				}, 600);
			},600);
	}
	var shop = {
		// Инициализация движка
		Init: function () {
			VK.Widgets.Group("vk_groups", {mode: 3, width: "auto"}, 124161875);
			overDel(); // удаляем Loader overlay		
		},
        initScrollBar: function () { //Скролл бар корзины
            jQuery('.mCustomScrollbar').mCustomScrollbar({
                theme:"minimal",
                scrollInertia: 300,
                scrollEasing: "linear"
            });
        },
		setItemParam: function() { // задаем параметры выбранному товару
			id=search;
			qty=$( "input[name='qty']" ).val();
			size=$( "input[name='size']:checked" ).val();
			color=$( "input[name='color']:checked" ).val();
			if (qty===undefined) {
				qty=1;
			}
			if (size===undefined) {
				size=1;
			}
			if (color===undefined) {
				color=1;
			}
			item={"id":id,"size":parseInt(size),"qty":parseInt(qty),"color":color};
		},
		getLsProducts: function() { // Достаем из localStorage products, помещаем в массив products
			var LSproducts=localStorage.getItem("products");
			products=JSON.parse(LSproducts);
			if (products === null) {
				products=[];
			}
		},
		addItemCart: function() {  // помещаем массив текущего товара в массив корзины
			products.push(item);
		},		
		storeLsProducts: function() { // запись массива products в localStorage
			if (products === null) {
				products=[];
			}			
			localStorage.setItem("products", JSON.stringify(products));
		},
		localStorage: function (search) { //Работа с localStorage
			shop.setItemParam();//Выставляем параметры выбранного товара
			shop.getLsProducts();  // Берем все товары из корзины
			shop.addItemCart(); // Добавляем товар
			shop.storeLsProducts(); //  записываем в localStorage			
		},
		btnCart: function() { // handle В КОРЗИНУ btn
			$('.addProduct').click(
				function(){
					event.preventDefault();
					search = $(this).data('id');
					shop.localStorage(); // Работа с LocalStorage
					shop.cartProductRender();//Рисуем список товаров в корзине
					$('.animateCart').removeClass('animated lightSpeedIn');
					setTimeout(function(){
						$('.animateCart').addClass('animated lightSpeedIn');
					}, 100);
				}
			);
		},
		btnClose: function() { // удаление одного товара из корзины нажатием на крестик
			$(".closeCart").click(function(){ // кнопка удаления товара х
				var id=$(this).data("id");
				console.log(id);
				products.splice(id, 1);
				shop.storeLsProducts();
				shop.cartCount(); // Отображение количества товаров в корзине
				$(this).closest("li").slideUp(500, function() { 
					shop.cartProductRender();
					jQuery('.subtotal-cost').counterUp({
		                delay: 10,
		                time: 600
		            });
				});
			});
		},
		btnCloseCheckOut: function() { // удаление одного товара из корзины нажатием на крестик
			$(".closeCheckOut").click(function(){ // кнопка удаления товара х
				var id=$(this).data("id");
				$(this).attr('disabled');
				console.log(id);
				products.splice(id, 1);
				shop.storeLsProducts();
				shop.cartCount(); // Отображение количества товаров в корзине
				$(this).closest("tr").slideUp(500, function() { 
					shop.cartProductRender();
					jQuery('.subtotal-cost').counterUp({
		                delay: 10,
		                time: 600
		            });
				});
			});
		},
		clearCart: function (search) { //очистка корзины
			$('#clearCart').click(
				function(){
					event.preventDefault(); // для предотовращения перехода по ссылке, точнее стандартных действий с текущим элементом
					products=[];
					shop.storeLsProducts();
					shop.cartProductRender();
				}
			);
		},
		cartCount: function (search) {
			cartCounter=0;
			summa=0;
			$.each(products, function(key, val) {
				cartCounter+=val['qty'];
			});
			counter.html( cartCounter );
			shop.initCounter();
		},
		initCounter: function () {
            jQuery('.badge.badge-sea.rounded-x').counterUp({
                delay: 10,
                time: 800
            });
        },
		cartSumm: function (qty,price) {
			var temp=parseInt(qty)*parseInt(price);
			summa+=temp;
			$('.subtotal-cost').html(summa);
		},
		cartProductRender: function  (){
			summa=0;
			var cartList=document.getElementById('mCSB_1_container');
			var checklist=document.getElementById('CheckOut');
			docfrag = document.createDocumentFragment();
			/* Render service info in modal*/
			function RenderInfo (val,key,cartItem){ // Функция создания элементов
				li = document.createElement("li"); 
				img = document.createElement("img");
				img.className = "mCS_img_loaded"; // хрен его знает, наверно нужно
				img.setAttribute('src', val.img.thumb); // иконка товара
				img.setAttribute ('alt', val.model); // модель товара
				btn=document.createElement("button");
				btn.setAttribute("type","button");
				btn.className="close closeCart";
				btn.textContent="×";
				btn.setAttribute("data-id",key); // номер элемента в корзине, ссылка для удаления из корзины
				div = document.createElement("div")
				div.className="overflow-h";
				span = document.createElement("span");
				span.textContent=val.brand + ' ' + val.model;
				small = document.createElement("small");
				small.textContent=cartItem.qty + ' x ' + val.price; // Количество х Цена
				li.appendChild(img);
				li.appendChild(btn);
				div.appendChild(span);
				div.appendChild(small);
				li.appendChild(div);
				docfrag.appendChild(li);

				shop.cartSumm(cartItem.qty,val.price); //рассчет суммы
			}

			if (products.length === 0) {
				summa=0;
				shop.cartSumm(0,0);
			} else {
				$.each(products, function(vkey, cartItem) {
					RenderInfo (JSONData[cartItem['id']],vkey,cartItem);
				});
			}
			while (cartList.firstChild) {
			    cartList.removeChild(cartList.firstChild);
			}
			cartList.appendChild(docfrag);
			shop.btnClose();
			shop.cartCount();
			if (checklist === null) {
				
			} else {
				shop.checkOutRender(checklist);
			}
		},
		checkOutRender: function  (checklist){
			$('.quantity-button').closest('.state-success').find('input');
			docfrag = document.createDocumentFragment();
			/* Render service info in modal*/
			function RenderInfo (val,key,cartItem){ // Функция создания элементов
				tr = document.createElement("tr");

				td = document.createElement("td");
				td1 = td.cloneNode(true);
					td1.className="product-in-table";
					img = document.createElement("img");
					img.className = "img-responsive"; // хрен его знает, наверно нужно
					img.setAttribute('src', val.img.thumb); // иконка товара
					img.setAttribute ('alt', val.model); // модель товара
					div = document.createElement("div")
					div.className="product-it-in";
					h3 = document.createElement("h3");
					h3.textContent=val.brand;
					span = document.createElement("span");
					span.textContent=val.model;

				td2 = td.cloneNode(true);
					td2.textContent=val.price;

				td3 = td.cloneNode(true);
					td3.className="state-success";
					btn1=document.createElement("button");
					btn1.setAttribute("type","button");
					btn1.className="quantity-button";
					btn2 = btn1.cloneNode(true);
					btn1.setAttribute("name","subtract");
					btn1.textContent="-";
					btn1.setAttribute("data-id",key);// номер элемента в корзине, ссылка для удаления из корзины
					btn1.setAttribute("data-cost",val.price);

					input = document.createElement("input");
					input.setAttribute("type","text");
					input.className="quantity-field valid";
					input.setAttribute("type","text");
					input.setAttribute("value",cartItem.qty);
					input.setAttribute("readonly",true);

					btn2.setAttribute("name","add");
					btn2.textContent="+";
					btn2.setAttribute("data-id",key);// номер элемента в корзине, ссылка для удаления из корзины
					btn2.setAttribute("data-cost",val.price);

				td4 = td.cloneNode(true);
					td4.className="shop-red";

				td5 = td.cloneNode(true);
					btn=document.createElement("button");
					btn.setAttribute("type","button");
					btn.setAttribute("data-id",key);
					btn.className="close closeCheckOut";
					btn.textContent="×";

				td1.appendChild(img);
				div.appendChild(h3);
				div.appendChild(span);
				td1.appendChild(div);

				td2.textContent=val.price;

				td3.appendChild(btn1);
				td3.appendChild(input);
				td3.appendChild(btn2);

				td4.textContent=cartItem.qty * val.price;

				td5.appendChild(btn);

				tr.appendChild(td1);
				tr.appendChild(td2);
				tr.appendChild(td3);
				tr.appendChild(td4);
				tr.appendChild(td5);
				docfrag.appendChild(tr);
			}

			if (products.length === 0) {
				summa=0;
			} else {
				$.each(products, function(vkey, cartItem) {
					RenderInfo (JSONData[cartItem['id']],vkey,cartItem);
				});
			}
			while (checklist.firstChild) {
			    checklist.removeChild(checklist.firstChild);
			}
			checklist.appendChild(docfrag);
			shop.btnCloseCheckOut();
			shop.btnQnty();
		},
		btnQnty:  function(){
			$('[name="add"].quantity-button').click(function(){
				var cqty;
				$(this).closest('.state-success').find('input').val(function(i, oldval) {
					cqty=++oldval;
    				return cqty;
				})
				var id=$(this).data('id');
				var cost=parseInt($(this).data('cost'));
				products[id]['qty']=cqty;
				console.log(products[id]);
				$(this).closest('tr').find('.shop-red').html(cost*cqty);
				shop.storeLsProducts(); //  записываем в localStorage
				shop.cartProductRender();//Рисуем список товаров в корзине		
			});
			$('[name="subtract"].quantity-button').click(function(){
				var cqty;
				$(this).closest('.state-success').find('input').val(function(i, oldval) {
					cqty=oldval;			
					if (cqty - 1 < 1) {
						cqty = 1;
					} else {
						cqty =--oldval;
					}
					return cqty;
				});
				var id=$(this).data('id');
				var cost=parseInt($(this).data('cost'));
				products[id]['qty']=cqty;
				console.log(products[id]);
				$(this).closest('tr').find('.shop-red').html(cost*cqty);
				shop.storeLsProducts(); //  записываем в localStorage
				shop.cartProductRender();//Рисуем список товаров в корзине
			});
	    },
	    inputQty: function(){
	    },
	    JSONData: function(){
	     	var Now = new Date();
	     	var file = ('data.json?' + Now.getTime());
	     	$.ajaxSetup({ cache: false });
	     	$.getJSON(file, function(data) {
	     		JSONData=data;  // Записываем полученные данные в переменную JSONData
				shop.getLsProducts();  // Берем все товары из корзины
				shop.cartProductRender();//Рисуем список товаров в корзине
		    });
	    }
	}
	jQuery(document).ready(function() {
		App.init();
		App.initParallaxBg();
		OwlCarousel.initOwlCarousel();
		RevolutionSlider.initRSfullWidth();
		MasterSliderShowcase2.initMasterSliderShowcase2();
		FancyBox.initFancybox();
		Login.initLogin();
		StepWizard.initStepWizard();
		MouseWheel.initMouseWheel();
		shop.Init(); /*INITIALIZATION start*/
	}); 
}());