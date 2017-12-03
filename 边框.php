课程：边框(外边距到内边距之间的线条)
        围绕在元素内容和内边距的线条
	        border：width:边框的宽度，默认单位为px  style：边框样式     color：边框颜色       
					                                        取值：solid：实线
							                                dotted:虚线
								                             dashed： 虚线
			        
                                        eg：
			                                 border：2px solid red
           
	
		单边定义(单边的全部属性)：border-方向:
		                    top  上
							bottom  下
							right  右
							left   左
             eg:  dorder-right:4px dotted blue

	    单独设置属性  
		          border-width:
				  border-style:
                  border-color:
             eg:border-style:dashed;    


        单独定义一个方向的单个属性：（单边的单个属性）
		              border—方向—属性：
					         top  上
							bottom  下
							right  右
							left   左
					属性：width  style color
              eg:
			     border-bottom-color:yellow;
    

    边框的倒角
	        将元素的直角变成圆的
			   属性：border-方向-方向-radius：值
			         border-radius:值（从左上角开始顺时针变化曲线，如果没有特别说明角曲线，它默认与对角相同曲线的值）
			         取值：px
					 eg:  border-top-left-radius:12px;（左上角变曲线....书写时，先写上下，后左右）
                                        
					   border-radius:12px 20px 30px 50px;（4个角变曲线，不同的值）

					    border-radius:12px 50px 100px;（左上角，右上角，右下角表曲线。左下角的曲线弯曲值与它的对角右上角相同）
     边框的阴影：box-shadow：h-shadow v-shadow blur spread color;
	                取值： h-shadow 水平偏移距离 必填
					       v-shadow  垂直偏移距离  必填
						   blur  模糊距离  可不填
						   spread 模糊大小  可不填
						   color  阴影  可不填
						   inset 默认 outset 改为内部


			     box-shadow:-10px   -50px     50px        20px      blue; 
		                     左右   上下     阴影变深   阴影变大   颜色               
		轮廊：
		       outline ：width style color：
			          width：宽度

					  style：线条样式
					  取值：solid：实线
							  dotted:虚线
								dashed：虚线

					  color：颜色

				outline ：none 取消轮廊






框模型：元素框处理，内边距，外边距，以及边框的一种计算方式
        
		外边距：元素和其他元素框之间的距离
		内边距：元素框和内容的距离
		 
框模型的默认计算方式：
                   元素实际的占地宽度=左右外边距+左右边框+左右内边距+widt
                   元素实际占地高度=上下外边距+上下边框+上下内边距+height


 外边距：围绕在元素边框外的空白距离（px）....元素与元素之间的距离
            语法：margin：定义四个方向的外边距
			      margin-top/bottom/right/left（定义单个边距）
				            top  上
							bottom  下
							right  右
							left   左
		当取值为负数的时候，让元素向相反的方向移动
		          margin-left 取值为正，向右移动，取值为负，向左移动
				  margin-top  取值为正，向下移动，取值为负，向上移动
	    取值为%，占父元素宽度和高度的占比
         取值为auto 自动，控制块级元素在水平居中
  margin：value；四个方向取同样的值。
  margin：value1 value2 ；value1代表上下外边距   value2 代表左右外边距
  margin：value1 value2 value3 ；value1代表上外边距 value2代表左右外边距 value3代表下边距
  margin：value1 value2 value3 value4 ；顺时针  上 右 下 左、
     
	 
	 自带外边距的元素：p  h1-h6  body pre dl dd dt
	  
	   Css Reset(Css重置)，重置浏览器或者元素本身捷带的外边距
	               (*) p ,h1 ,h2, h3 ,h4 ,h5 ,h6 ,P  ...{
					
					margin:0;
					}

        外边距的合并
		            当两个垂直外边距相遇时，他将会合并成一个外边距，

内边距：围绕在元素边框和元素内容的空白距离（px）....元素与元素内容之间的距离
            语法：padding：定义四个方向的外边距
			      padding-top/bottom/right/left（定义单个边距）
				            top  上
							bottom  下
							right  右
							left   左
		当取值为负数的时候，让元素向相反的方向移动
		          padding-left 取值为正，向有移动，取值为负，向左移动
				  padding-top  取值为正，向下移动，取值为负，向上移动
	    
		
		取值为%，占父元素宽度和高度的占比
         取值为auto 自动，元素内容在元素内在水平居中


定义框模型
           box-sizing： 
		              作用：制定框模型的计算机方式
					        1.content-box
							            默认计算方式：
										      元素实际的占地宽度=左右外边距+左右边框+左右内边距+widt
                                              元素实际占地高度=上下外边距+上下边框+上下内边距+height
	                        2.border-box
							            元素尺寸，会包含border以及padding的值
										元素实际的占地宽度=width（border+padding）
										元素实际的占地高度=height（border+padding）
             背景：
			         背景颜色：background-color 
					         取值#oooooo-#ffffff
					 背景图片： background-image：url（图片路径） 
					         
					 背景图片平铺：background-repeat：
					                                    repeat（横向纵向都平铺）
														repeat-x；水平平铺
														repeat-y; 垂直平铺
														no-repeat ； 不平铺
                     背景图片尺寸：
					           background-size：width  宽度(px %)  height 高度（px %）;
							                  cover:将背景图片等比例缩放到与元素区域相同 
											  contain 将背景图片等比例缩放，直到元素碰到元素边缘位置
					 背景图片的定位
						        背景图片的元素中的位置
								      background-position:x y;
									               取值 x y(px %)

												   x:left center right
												   y:top center bottom
					背景依附效果 
					            background-attachment :scoll  默认滚动
								                       fixed  固定
 
					 简写：
					      background： 
						             取值： color  背景颜色 
									        url    背景图片位子
											repeat  背景平铺
											attachment  背景依附效果
											position 背景定位
											size  背景尺寸
											....
                                 eg:background:url(a.jpg) no-repeat left bottom;