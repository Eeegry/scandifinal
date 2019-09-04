<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Product add</title>
  
</head>
<body>

<h1>Product add page</h1>
<hr>

<div class="container">
    <div class="row justify-content-center">
        <form method="post">
        <div class="form-group">
        <label>SKU</label>
        <input type="text" name="SKU" class="form-control" 
            value='' placeholder="Enter SKU">
        </div>
        <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" class="form-control" 
            value="" placeholder="Enter name">
        </div>
        <div class="form-group">
        <label>Price</label>
        <input type="text" name="price" class="form-control"
            value="" placeholder="Enter price">
        </div> 
        
        <div class="form-group">
        <label>Category</label>
        <select id="product-add">
            <option value="">Please select the product</option>
            <option value="disc">Disc</option>
            <option value="book">Book</option>
            <option value="furniture">Furniture</option>
        </select>
        </div>
        </form> 

        <form id="form">
        <div class="form-group">
            <input type="submit" class="btn btn-primary" id='save' name="save">
        </div>
        </form>
    
    <script>
    //const persistentFields = ['sku', 'price', 'name']
    const fields = {
      disc: ['size'],
      book: ['weight'],
      furniture: ['height', 'width', 'length']
    }
    const productAdd = document.getElementById('product-add')
    const form = document.getElementById('form')
    const submitButton = document.getElementById('save')
    window.addEventListener('DOMContentLoaded', () => {
      cleanForm()
      //renderFields(persistentFields)
      form.appendChild(submitButton)
    })
   
    productAdd.addEventListener('change', e => {
      console.log('YEET')
      const category = e.target.value
 
      if (category) {
        cleanForm()
        //renderFields(persistentFields)
        renderFields(fields[category])
        form.appendChild(submitButton)
      }
    })
 
    function cleanForm() {
      while (form.firstChild) {
        form.removeChild(form.firstChild)
      }
    }
 
    function renderFields(fields) {
      fields.forEach(field => {
        const div = document.createElement('div')
        const input = document.createElement('input')
        const label = document.createElement('label')
        
        label.setAttribute('for', field)
        label.textContent = `${field.charAt(0).toUpperCase()}${field.slice(1)}`
        input.setAttribute('type', 'text')
        input.setAttribute('id', field)
        form.appendChild(label)
        form.appendChild(input)
        div.classList.add('form-group')
      })
      return form
    }
    </script>

    <label></label>
    </div>
</div>
<?php



?>
</body>
</html>
