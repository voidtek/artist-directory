// JavaScript Document
		
		var pmTransition = function(cible,param,ext,depart,arrive,temps,quality,ease,onComplete){
			
			var nowNb;
			var increment;
			var easeValue = 0;
			var easeNumber = 0;						
			
			//RECUPERATION DE LA VALEUR ACTUEL SI 'DEPART' NUL
			if(depart == '' && depart != 0){
				if(msie){
					if(param == "opacity"){
					var tempStyle = $dom(cible).style.getAttribute("filter");
					depart = parseInt(tempStyle.substr(tempStyle.lastIndexOf('alpha(opacity=')+(param.length+7)));
					arrive = arrive * 100 ;																			
					}
					else
					depart = parseInt($dom(cible).style.getAttribute(param));
				}
				else if(!msie){
					var tempStyle = $dom(cible).getAttribute('style');
					depart = parseInt(tempStyle.substr(tempStyle.lastIndexOf('; '+param+':')+(param.length+3)));
				}
			}
			
			//TEST SI 'ARRIVE' EST UNE VALEUR FIXE OU INCREMENTATION TYPE '+100'
			try{
				var incr = arrive.substr(0,1);
				var incrNb =  parseInt(arrive.substr(1));
					arrive = (incr == '+') ? (depart + incrNb) : (depart - incrNb) ;
			}catch(e){}
			
			
			//AFFECTATION DE LA VALUER ACTUEL + CALCUL DE L'INTERVAL A CREE
				nowNb = depart;
			var inter = temps/quality;
			
			//CALCUL DE L'INCREMENT A AJOUTER OU RETIRER LORS DE L'INTERVAL
			if(arrive >= depart)
				increment = (arrive - depart) / quality;
			else 
				increment = (depart - arrive) / quality;
			
			//INIT EASE S'IL EST PRESENT 
			initEase = function(){
				if(ease){
					ease.strenght = ease.strenght || 5 ;
					easeValue = (increment*ease.strenght) ;
					easeNumber = (ease.strenght/50);
				}
			}
			
			//AFFECTATION DU PARAMETTRE A L'ATTRIBUT STYLE DE LA BALISE
			setValue = function(){
				
				if(msie){
					if(param == "opacity")
						$dom(cible).style.setAttribute("filter","alpha(opacity="+(nowNb)+")","false");
					else
						$dom(cible).style.setAttribute(param,nowNb+ext,"true");
				}else{
					var tempStyle = $dom(cible).getAttribute("style");
					var t = (param.indexOf(':') != -1) ? '' : ':' ;
					$dom(cible).setAttribute("style",tempStyle +param+t+nowNb+ext+";","false");
				}
				
			}
			
			//TEST DE FIN
			isFinished = function(){
				
				if((arrive >= depart && (nowNb+easeNumber) >= arrive) || (arrive <= depart && (nowNb-easeNumber) <= arrive)){
					nowNb = arrive;
					setValue();
					return true;
				}else
					return false;
			}
			
			//onComplete EXECUTER A LA FIN DE LA TWEEN, CONTIENT DES EVENEMENTS TELS QUE 'YOYO' ET 'BOUNCE'
			doOnComplete = function(){
				onComplete.delay = onComplete.delay || 0 ;
				if(onComplete.fct == 'yoyo'){
					arrive = depart ;
					depart = nowNb ;
					onComplete.fct = '';
					ease.type = (ease.type == 'in') ? 'out' : 'in' ;
					initEase();
					doTransition();
				}else if(onComplete.fct == 'bounce'){
					distance = (arrive>=depart) ? (arrive-depart) : (depart-arrive) ;
					arrive = nowNb - ((distance*20)/100) ;
					depart = nowNb;
					temps = 500;
					quality = 20;
					ease.type = 'out';
					onComplete.fct = 'rebond';
					initEase();
					doTransition();
				}else if(onComplete.fct == 'rebond'){
					arrive = depart ;
					depart = nowNb ;
					onComplete.fct = '';
					ease.type = 'in' ;
					temps = 500;
					quality = 10;
					initEase();
					doTransition();
					
				}else
					setTimeout(onComplete.fct,onComplete.delay);
			}
			
			//INCREMENTATION DE LA VALEUR ACTUEL EN FONCTION DE 'EASE' S'IL EXISTE
			incValue = function(){
			
				if(ease)
					switch(ease.type){
						case "linear" :
						
						break;
						
						case "out" :	
							if(easeValue > 0){
								easeValue = easeValue - (easeValue*1e-1);
								easeNumber = easeValue;
								//pmLog(easeNumber);
							}
						break;
						
						case "in" :	
							if(easeNumber < easeValue){
								easeNumber = easeNumber + (easeNumber*2e-1);
								//pmLog(easeNumber);
							}
						break;
							
					};
			
				if(arrive >= depart)
					nowNb = (easeNumber > 0) ? (nowNb + increment + easeNumber) : (nowNb + increment);
				else
					nowNb = (easeNumber > 0) ? (nowNb - increment - easeNumber) : (nowNb - increment);
				
			}
			
			//CHEF D'ORCHESTRE, FONCTION EXECUTER EN BOUCLE SAUF SI 'isFinished()' S'AVERE VRAI
			doTransition = function(){
				
				incValue();
				setValue();
				
				if(!isFinished())
					tempoInter = setTimeout("doTransition()",inter);
				else if(onComplete)
					doOnComplete();
			}
			
			initEase();
			doTransition();
			
		}
