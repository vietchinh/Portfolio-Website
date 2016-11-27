<body>
	<script type="text/javascript">
	/*--Menu Button Interactions Section--*/
		var memory = ["#home"];
		function fade(){
			previous = memory[0];
			current = memory[1];	
			if ($(current).css("display") == "none") {
				switch (current) {
				<?php
					while (current($content)){
						$contentkey = key($content);
							echo "
								case '#{$content[$contentkey][1]}': 
									$(previous).fadeOut('fast', function(){ $(current).fadeIn('slow').css('display','inline-flex'); memory.splice(0, 1); });
								break;
								";
						next($content);
					}
					reset($content);
				?>
				}
			}
			else {
				switch (current) {
					<?php
						while (current($content)){
							$contentkey = key($content);
								echo "
									case '#{$content[$contentkey][1]}': 
										$(previous).fadeOut('fast', function(){ $(current).fadein('slow').css('display','inline-flex'); memory.splice(0, 1); });
									break;
									";
							next($content);
						}
						reset($content);
					?>
				}			
			}
		}
		<?php
			while (current($content)){
				$contentkey = key($content);
				echo "
					function {$content[$contentkey][1]}(){
						var index = memory.indexOf('#{$content[$contentkey][1]}');
						if (memory[index] == '#{$content[$contentkey][1]}'){
						}
						else {
							memory.push('#{$content[$contentkey][1]}');
							fade();
						}
					}
					";
				next($content);
			}
			reset($content);
		?>
	/*--End Menu Button Interactions Section--*/
	/*--WebsiteChangelogs Interactions Section--*/
		var title = ["Concept Design", "Intial Design", "Version 1", "Version 2"];
		var pathtoimg = ["changelog-images/concept design2.jpg", "changelog-images/initial design.jpg", "changelog-images/14-11-2016.jpg", "changelog-images/17-11-2016.jpg"];
		var number = 0;
		var h3 = document.createElement("h3");
		h3.innerHTML = title[0];
		document.getElementById("websitechangelogs").getElementsByClassName("panel-title")[0].appendChild(h3);
		var img = document.createElement("img");
		img.src = pathtoimg[0];
		document.getElementById("websitechangelogs").getElementsByClassName("content")[0].appendChild(img);
		function right(){
			if (number != (title.length - 1)){
				number = number + 1;
				console.log(number);
				fadetitle(number);
			}
		}
		function left(){
			if (number != 0){
				number = number - 1;
				console.log(number);
				fadetitle(number);
			}
		}
		function fadetitle(number) {
			if (number != 0){
				$(".row").children("#websitechangelogs").children(".column-20").children(".panel").children(".panel-title").children("#left").fadeIn("fast");
			}
			else {
				$(".row").children("#websitechangelogs").children(".column-20").children(".panel").children(".panel-title").children("#left").fadeOut("fast");
			}
			if (number != (title.length - 1) ){
				$(".row").children("#websitechangelogs").children(".column-20").children(".panel").children(".panel-title").children("#right").fadeIn("fast");
			}
			else {
				$(".row").children("#websitechangelogs").children(".column-20").children(".panel").children(".panel-title").children("#right").fadeOut("fast");
			}
			$(".row").children("#websitechangelogs").children(".column-20").children(".panel").children(".panel-title").children("h3").fadeOut("normal",
			function() {
				$(this).remove();
				var h3 = document.createElement("h3");
				h3.innerHTML = title[number];
				h3.style.display = "none";
				document.getElementById("websitechangelogs").getElementsByClassName("panel-title")[0].appendChild(h3);
				$(h3).fadeIn();
			});
			$(".row").children("#websitechangelogs").children(".column-20").children(".panel").children(".content").children("img").fadeOut("normal",
			function() {
				$(this).remove();
				var img = document.createElement("img");
				img.src = pathtoimg[number];
				img.style.display = "none";
				document.getElementById("websitechangelogs").getElementsByClassName("content")[0].appendChild(img);
				$(img).fadeIn();
			});
		}
	</script>
</body>