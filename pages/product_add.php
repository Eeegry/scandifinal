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
        <form id="form" method="post">
        <div class="row justify-content-center">
        <label>Category</label>
        <select name="category" id="product-add">
            <option value="">Please select the product</option>
            <option value="disc">Disc</option>
            <option value="book">Book</option>
            <option value="furniture">Furniture</option>
        </select>
        </div>
        <input name="save" value="Save" type="submit" id="save">
        </form> 

    <script>
    const persistentFields = ['sku', 'price', 'name']
    const fields = {
      disc: ['size'],
      book: ['weight'],
      furniture: ['height', 'width', 'length']
    }
    const productAdd = document.getElementById('product-add')
    const form = document.getElementById('form')
    const submitButton = document.getElementById('save')
    window.addEventListener('DOMContentLoaded', () => {
      form.appendChild(submitButton)
    })
   
    productAdd.addEventListener('change', e => {
      const category = e.target.value
  
      if (category) {
        cleanForm()
        form.appendChild(productAdd)
        renderFields(persistentFields)
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
        div.classList.add('form-group')
        div.classList.add('col-md-4')
        const label = document.createElement('label')
        const input = document.createElement('input')
        label.setAttribute('for', field)
        label.textContent = `${field.charAt(0).toUpperCase()}${field.slice(1)}`
        input.setAttribute('type', 'text')
        input.setAttribute('name', field)
        input.setAttribute('id', field)
        input.classList.add('form-group')
        div.appendChild(label)
        div.appendChild(input)
        form.appendChild(div)
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
