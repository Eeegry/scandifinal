
<h1>Product add page</h1>
<hr>

<div class="container">
      <div class="row">
        <div class="col-6 offset-3">
        <form id="form" method="post" class="card">
        <label class="text-center">Category</label>
        <select name="category" id="product-add" class="form-control">
            <option value="">Please select the product</option>
            <option value="disc">Disc</option>
            <option value="book">Book</option>
            <option value="furniture">Furniture</option>
        </select>
        <input name="save" value="Save" type="submit" id="save" class="btn btn-info btn-block">
        </form> 
        </div>
      </div>  
</div>

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
        const label = document.createElement('label')
        const input = document.createElement('input')
        label.setAttribute('for', field)
        label.textContent = `${field.charAt(0).toUpperCase()}${field.slice(1)}`
        input.setAttribute('type', 'text')
        input.classList.add('form-control')
        input.setAttribute('name', field)
        input.setAttribute('id', field)
        div.appendChild(label)
        div.appendChild(input)
        div.classList.add('justify-content-center')
        form.appendChild(div)
      })
      return form
    }
    </script>
    </div>
</div>
<footer class="footer">
<hr/>
  <a href="index.php">Back to product list</a>
  <?php ?>
</footer>