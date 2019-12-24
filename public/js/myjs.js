new Vue({
	el:'#timeline',
	methods:{ 
		postStatus(e){
			e.preventDefault();
			console.log('posted');
		}
	}
});