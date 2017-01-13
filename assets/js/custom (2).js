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
	var img,span,div,li,btn,small,docfrag; // elements for render
	var myExp,search; // renderInfo vars
	function overDel () {
			setTimeout(function(){
				$('#loading').addClass('animated fadeOut');
				setTimeout(function() {	
					$('#loading').remove();
				}, 600);
			},2300);
	}
	var shop = {
		// Инициализация движка
		Init: function () {
			shop.cartCount(); //cart counter
			shop.JSONData(); // получение списка товаров
			shop.btnClose(); // инициализация кнопок удаления из корзины
			shop.btnCart(); // инициализация кнопки в корзину
			VK.Widgets.Group("vk_groups", {mode: 3, width: "auto"}, 124161875);
			overDel(); // удаляем Loader overlay
			shop.initScrollBar();
			shop.clearCart();
			
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
				item={"id":id,"size":parseInt(size),"qty":parseInt(qty),"color":parseInt(color)};
				console.log(item);
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
			$(".close").click(function(){ // кнопка удаления товара х
				var id=$(this).data("id");
				console.log(id);
				products.splice(id, 1);
				shop.storeLsProducts();
				shop.cartCount(); // Изменение количества товаров
				$(this).closest('tr').fadeOut(500);
				$(this).parent().fadeOut(500, function() { shop.cartProductRender(); });			
			});
		},
		clearCart: function (search) { //очистка корзины
			$('#clearCart').click(
				function(){
					event.preventDefault(); // для предотовращения перехода по ссылке, точнее стандартных действий с любым элементом
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
                time: 1000
            });
        },
		cartSumm: function (qty,price) {
			var temp=parseInt(qty)*parseInt(price);
			summa+=temp;
			$('.subtotal-cost').html(summa);
			console.log('сумма' + summa);
		},
		cartProductRender: function  (){
			summa=0;
			var cartList=document.getElementById('mCSB_1_container');
			docfrag = document.createDocumentFragment();
			/* Render service info in modal*/
			function RenderInfo (val,key,cartItem){ // Функция создания элементов
				console.log('Отрисовка ' + val);
				li = document.createElement("li"); 
				img = document.createElement("img");
				img.className = "mCS_img_loaded"; // хрен его знает, наверно нужно
				img.setAttribute('src', val.img.thumb); // иконка товара
				img.setAttribute ('alt', val.model); // модель товара
				btn=document.createElement("button");
				btn.setAttribute("type","button");
				btn.className="close";
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

				shop.cartSumm(cartItem.qty,val.price); //рассчет суммы
			}
			if (products.length === 0) {
				summa=0;
				shop.cartSumm(0,0);
			} else {
				$.each(products, function(vkey, cartItem) {
					myExp = new RegExp(cartItem['id'], "i");
					RenderInfo (JSONData[cartItem['id']],vkey,cartItem);
					docfrag.appendChild(li);
				});
			}
			while (cartList.firstChild) {
			    cartList.removeChild(cartList.firstChild);
			}
			cartList.appendChild(docfrag);
			shop.btnClose();
			shop.cartCount();
		},
	    JSONData: function(){
	     	var Now = new Date();
			Now = Now.getTime();
	     	var file = ('data.json?' + Now);
	     	$.getJSON(file, function(data) {
	     		JSONData=data;
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