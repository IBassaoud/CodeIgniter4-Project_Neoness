<?php
if (isset($_POST['action'])){
$action = $_POST['action'];
}
?>
<div class="container mx-auto px-4 md:max-w-xl">
<h1 class="mt-6 mb-4 text-center text-3xl font-extrabold text-gray-900">
					DETAIL USER
</h1>
<form action="<?= base_url('/dashboard/users')?>" method="POST">
  <!-- <div class="relative z-0 mb-6 w-full group">
      <input type="email" name="email" id="email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray-900 dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " >
      <label for="email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email address</label>
  </div> -->
  <div class="grid md:grid-cols-2 md:gap-6">
    <div class="relative z-0 mb-6 w-full group">
        <input 
        value ="<?php if (isset($dataAction)){ echo $dataAction['id'] ;}?>"
        type="text" 
        name="id" 
        id="id" 
        <?php if (isset($action) && $action == "visualize"){ echo "disabled" ;} ?>
        class="
        block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray-900 dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " >
        <label for="id" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">ID</label>
    </div>
    <div class="relative z-0 mb-6 w-full group">
        <input 
        value ="<?php if (isset($dataAction)){ echo $dataAction['email'] ;} ?>"
        type="text" 
        name="email" 
        id="email" 
        <?php if (isset($action) && $action == "visualize"){ echo "disabled" ;} ?>
        class="
        block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray-900 dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " >
        <label for="email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email</label>
    </div>
  </div>
  <div class="grid md:grid-cols-2 md:gap-6">
    <div class="relative z-0 mb-6 w-full group">
        <input 
        value ="<?php if (isset($dataAction)){ echo $dataAction['firstname'] ;}?>"
        type="text" 
        name="firstname" 
        id="firstname" 
        <?php if (isset($action) && $action == "visualize"){ echo "disabled" ;} ?>
        class="
        block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray-900 dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " >
        <label for="firstname" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">First name</label>
    </div>
    <div class="relative z-0 mb-6 w-full group">
        <input 
        value ="<?php if (isset($dataAction)){ echo $dataAction['lastname'] ;}?>"
        type="text" 
        name="lastname" 
        id="lastname" 
        <?php if (isset($action) && $action == "visualize"){ echo "disabled" ;} ?>
        class="
        block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray-900 dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " >
        <label for="lastname" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Last name</label>
    </div>
  </div>
  <div class="grid md:grid-cols-2 md:gap-6">
    <div class="relative z-0 mb-6 w-full group">
        <input 
        value ="<?php if (isset($dataAction)){ echo $dataAction['age'] ;}?>"
        type="text" 
        maxlength="3" 
        name="age" 
        id="age" 
        <?php if (isset($action) && $action == "visualize"){ echo "disabled" ;} ?>
        class="
        block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray-900 dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" ">
        <label for="age" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Age</label>    
    </div>
    <div class="relative z-0 mb-6 w-full group">
        <input 
        value ="<?php if (isset($dataAction)){ echo $dataAction['phone'] ;}?>"
        type="tel" 
        name="phone" 
        id="phone" 
        <?php if (isset($action) && $action == "visualize"){ echo "disabled" ;} ?>
        class="
        block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray-900 dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" ">
        <label for="phone" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Phone</label>
    </div>
  </div>


  <div class="grid md:grid-cols-2 md:gap-6">
    <div class="relative z-0 mb-6 w-full group">
        <input 
        value ="<?php if (isset($dataAction)){ echo $dataAction['height'] ;}?>" 
        type="text" 
        placeholder=" " 
        maxlength="3" 
        name="height" 
        id="height" 
        <?php if (isset($action) && $action == "visualize"){ echo "disabled" ;} ?>
        class="
        block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray-900 dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
        onchange="calculateBMI()">
        <label for="height" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Height (in centimeter)</label>    
    </div>
    <div class="relative z-0 mb-6 w-full group">
        <input 
        value ="<?php if (isset($dataAction)){ echo $dataAction['weight'] ;}?>"
        type="text" 
        placeholder=" " 
        maxlength="5" 
        name="weight" 
        id="weight" 
        <?php if (isset($action) && $action == "visualize"){ echo "disabled" ;} ?>
        class="
        block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray-900 dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
        onchange="calculateBMI()">
        <label for="weight" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Weight (in Kg)</label>
    </div>
    </div>

  <div class="grid md:grid-cols-2 md:gap-6">
    <div class="relative z-0 mb-6 w-full group">
        <input 
        value ="<?php if (isset($dataAction)){ echo $dataAction['weight_target'] ;}?>"
        type="text" 
        placeholder=" " 
        maxlength="5" 
        name="weight_target" 
        id="weight_target" 
        <?php if (isset($action) && $action == "visualize"){ echo "disabled" ;} ?>
        class="
        block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray-900 dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
        <label for="weight_target" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Goal weight</label>    
    </div>
    <div class="relative z-0 mb-6 w-full group">
        <input type ="hidden" name="bmi" id="bmi">
        <input 
        value ="<?php if (isset($dataAction)){ echo $dataAction['bmi'] ;}?>"
        disabled
        placeholder=" " 
        id="bmi_display" 
        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray-900 dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
        <label for="bmi_display" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">BMI</label>
    </div>
</div>
<div class="grid md:grid-cols-2 md:gap-6">
<div class="relative z-0 mb-6 w-full group">
    <input 
    disabled
    value ="<?php if (isset($dataAction)){ echo $dataAction['created_at'] ;}?>"
    type="text" 
    name="created_at" 
    id="created_at" 
    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray-900 dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" ">
    <label for="created_at" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Created the :</label>    
</div>
<div class="relative z-0 mb-6 w-full group">
    <input 
    disabled
    value ="<?php if (isset($dataAction)){ echo $dataAction['updated_at'] ;}?>"
    type="tel" 
    name="updated_at" 
    id="updated_at" 
    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray-900 dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" ">
    <label for="updated_at" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Updated the :</label>
</div>
</div>
<div class="relative z-0 mb-6 w-full group">
      <input 
      value ="<?php if (isset($dataAction)){ echo $dataAction['role'] ;}?>"
      disabled 
      type="text" 
      name="role" 
      id="role" 
      class="text-center block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray-900 dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " >
      <label for="role" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Role</label>
  </div>

<div class='mt-2 mb-4 text-center text-1xl font-bold' id="bmi_body"></div>
  <div class="text-center lg:text-center">
  <button 
  type="submit" 
  class="text-white bg-indigo-500 hover:bg-indigo-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
  Edit
</button>
 
<p class="mt-6 text-center text-1xl font-extrabold text-green-500"> 
</div>
</form>

</div>