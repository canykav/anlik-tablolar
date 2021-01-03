<template>
  
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

</template>

<script>
export default {
    props: ['worklist'],
}
</script>

<style>

</style>