<template>
<div class="container" style="margin-top: 50px;">
	<create-work @isekle="isekle"></create-work>
	<list-works :worklist="worklist"></list-works>
</div>
</template>
<script>
import CreateWork from './CreateWork';
import ListWorks from './ListWorks';
    export default {
		components: {
			CreateWork,
			ListWorks,
		},
		data() {
			return {
				worklist: [],
			}
		},
		mounted() {
			this.islistele();
		},
		methods: {
			isekle: function(title,content) {
				var that = this;
				axios.post('/iskaydet', {
				title: title,
				content: content,
				})
				.then(function (response) {
					alert('kaydedildi');
					that.islistele();
				})
				.catch(function (error) {
					console.log(error);
				});
			this.title = "" ;
			this.content = "";			
			},
			islistele: function() {
				var that = this;
				axios.get('/islistele')
				.then(function (response) {
					// handle success
					that.worklist = response.data;
				})
				.catch(function (error) {
					// handle error
					console.log(error);
				})
				.then(function () {
					// always executed
				});
			}
		}
    }
</script>
