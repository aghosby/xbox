// JavaScript Document

$(document).ready(function() {

	const tl = gsap.timeline({
		paused: true,
		yoyo: true,
		defaults: { duration: 1, ease: "easeInOut" }
	});

	if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
		tl
		.to(".triangle", 1.5, { 
			background: "linear-gradient(269.16deg, #8BD80A 0.72%, #3D3C3C 74.33%)",
			transform: "matrix(0.965926, 0.258819, -0.258819, 0.965926, -20.5197, -77.9676)"
			//rotate(375deg) translate(-80px,-140px)
		})
		.to(".activeProd", 1.5, { 
			transform: "matrix(0.30, 0, 0, 0.30, 585, -10)" 
		}, '-=1.5')
		.to(".subActiveProd", 1.5, { 
			transform: "matrix(1.8, 0, 0, 1.8, 110, -200)"
		}, '-=1.5')
		.to(".mob1", 1, { 
			transform: "translate(0, 100%)",
			opacity: "1"
		}, '-=1.5')
		.to(".mob2", 1, { 
			transform: "translate(120%, 20px)",
			opacity: "0"
		}, '-=1.5')
		.to(".price", 1.5, { 
			color: "#fff" 
		}, '-=1.5')
		.to(".g-text", 1.5, { 
			color: "#fff" 
		}, '-=1.5')
		.to(".pg-wrap", 1.5, { 
			background: "#000" 
		}, '-=1.5')
		.to(".inner1", 1, { 
			transform: "translateY(150%)"
		}, '-=1.5')
		.to(".feat-s", 1, { 
			display: "none",
			opacity: "0"
		}, '-=1.5')
		.to(".feat-x", 1, { 
			display: "block",
			opacity: "1"
		}, '-=1.5')
		.to(".bg-lines", 0.2, { 
			opacity: "0"
		}, '-=1.5');
	}
	else {
		tl
		.to(".triangle", 1.5, { 
			background: "linear-gradient(269.16deg, #8BD80A 0.72%, #3D3C3C 74.33%)",
			transform: "matrix(0.965926, 0.258819, -0.258819, 0.965926, -41.0394, -155.935)"
			//rotate(375deg) translate(-80px,-140px)
		})
		.to(".letter", 1.5, { 
			transform: "matrix(0.984808, 0.173648, -0.173648, 0.984808, -68.3657, -72.9803)"
		}, '-=1.5')
		.to(".activeProd", 1.5, { 
			transform: "matrix(0.30, 0, 0, 0.30, 585, -10)" 
		}, '-=1.5')
		.to(".subActiveProd", 1.5, { 
			transform: "matrix(2.8, 0, 0, 2.8, -560, 30)" 
		}, '-=1.5')
		.to(".price", 1.5, { 
			color: "#fff" 
		}, '-=1.5')
		.to(".g-text", 1.5, { 
			color: "#fff" 
		}, '-=1.5')
		.to(".pg-wrap", 1.5, { 
			background: "#000" 
		}, '-=1.5')
		.to(".inner-spec", 1, { 
			transform: "translateY(50%)"
		}, '-=1.5')
		.to(".inner1", 1, { 
			transform: "translateY(60%)"
		}, '-=1.5')
		.to(".feat-s", 1, { 
			display: "none",
			opacity: "0"
		}, '-=1.5')
		.to(".feat-x", 1, { 
			display: "block",
			opacity: "1"
		}, '-=1.5')
		.to(".bg-lines", 0.2, { 
			opacity: "0"
		}, '-=1.5');

	}

	const changeState = document.getElementById("changeState");
	changeState.addEventListener('click', () => {
		tl.reversed() ? tl.play() : tl.reverse()
	})

    
		
});

