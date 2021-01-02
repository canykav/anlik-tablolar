<template>
<div class="container" style="margin-top: 50px;">
	<form @submit.prevent="isekle">

  <div class="card">
	 <div class="card-header"> <h4> İş Ekle </h4></div>
  <div class="card-body">
  <textarea class="form-control" placeholder="Başlık girin.." v-model="title" aria-label="With textarea"></textarea>
   </div>

   <div class="card-body">
    <textarea class="form-control" placeholder="içerik girin.." v-model="content" aria-label="With textarea"></textarea>
	</div>

	  <input type="submit" class="btn btn-primary float-end" style="margin-top:10px;">
</div>
  </form>

  <div class="card" style="margin-top: 20px">
<div class="card-header"> <h4> İş Kayıtları </h4></div>
	  <div class="card-body">
<table class="table">
  <thead>
    <tr>
	<th scope="col">ID</th>
	<th scope="col">Başlık</th>
	<th scope="col">İçerik</th>
	<th scope="col">Oluşturulma Tarihi</th>	
    </tr>
	  </thead>
  <tbody>
<tr :key="work.id" v-for="work in worklist">
		<td scope="row">{{work.id}}</td>
		<td>{{work.title}}</td>
		<td>{{work.content}}</td>
		<td>{{work.created_at}}</td>
</tr>
  </tbody>
</table>
</div>
</div>
</div>
</template>
<script>
    export default {
		data() {
			return {
				title:"",
				content: "",
				worklist: [],
			}
		},
		mounted() {
			this.islistele();
		},
		methods: {
			isekle: function() {
				var that = this;
				axios.post('/iskaydet', {
				title: this.title,
				content: this.content,
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
