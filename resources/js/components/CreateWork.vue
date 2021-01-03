<template>
  <form @submit.prevent="$emit('isekle', title, content)">

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
</template>

<script>
export default {
    data() {
        return {
            	title:"",
				content: "",
        }
    }
}
</script>

<style>

</style>