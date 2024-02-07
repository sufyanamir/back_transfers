@include('admindashboard.layouts.header')
<style>
    .dropzone {
      border: 2px dashed #ccc;
      padding: 20px;
      text-align: center;
      cursor: pointer;
    }

    input[type="file"] {
      display: none;
    }

    .dropzone:hover {
      border-color: #4CAF50;
    }
</style>
   <form action="" class=" scale-up-hor-center  max-w-[800px] mx-auto flex flex-col gap-5  px-2 shadow-2xl lg:px-20 py-10  my-5 rounded-2xl">
    <div>
        <h1 class="text-center  rounded-[6px] py-4  font-montserrat text-4xl font-medium">Fleets List</h1>
    </div>
      <div class="grid md:grid-cols-2 gap-4">
        <x-input :type="'text'" :label="'Name'"></x-input>
        <x-input :type="'text'" :label="'Fleet Description'"></x-input>
      </div>

      <div class="grid md:grid-cols-2 gap-4">
        <x-input :type="'number'" :label="'sitting Capacity'"></x-input>
        <x-input :type="'text'" :label="'Note'"></x-input>
      </div>

  <div class="dropzone" onclick="document.getElementById('fileInput').click()">
    <p>Drag and drop files here or click to select files</p>
    <input type="file" name="upload_image" id="fileInput" multiple>
  </div>

  <div class="flex flex-wrap justify-center">
    <button class="bg-black w-1/4 hover:bg-white hover:border  border-black hover:text-black text-white rounded-[6px] py-2 font-montserrat text-3xl">Submit</button>
  </div>


        


   </form>





@include('admindashboard.layouts.footer')
