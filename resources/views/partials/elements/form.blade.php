<h3>Form</h3>

<form
  method="post"
  action="#"
>
  <div class="row gtr-uniform">
    <div class="col-6 col-12-xsmall">
      <input
        type="text"
        name="demo-name"
        id="demo-name"
        value=""
        placeholder="Name"
      />
    </div>
    <div class="col-6 col-12-xsmall">
      <input
        type="email"
        name="demo-email"
        id="demo-email"
        value=""
        placeholder="Email"
      />
    </div>
    <!-- Break -->
    <div class="col-12">
      <select
        name="demo-category"
        id="demo-category"
      >
        <option value="">- Category -</option>
        <option value="1">Manufacturing</option>
        <option value="1">Shipping</option>
        <option value="1">Administration</option>
        <option value="1">Human Resources</option>
      </select>
    </div>
    <!-- Break -->
    <div class="col-4 col-12-small">
      <input
        type="radio"
        id="demo-priority-low"
        name="demo-priority"
        checked
      >
      <label for="demo-priority-low">Low</label>
    </div>
    <div class="col-4 col-12-small">
      <input
        type="radio"
        id="demo-priority-normal"
        name="demo-priority"
      >
      <label for="demo-priority-normal">Normal</label>
    </div>
    <div class="col-4 col-12-small">
      <input
        type="radio"
        id="demo-priority-high"
        name="demo-priority"
      >
      <label for="demo-priority-high">High</label>
    </div>
    <!-- Break -->
    <div class="col-6 col-12-small">
      <input
        type="checkbox"
        id="demo-copy"
        name="demo-copy"
      >
      <label for="demo-copy">Email me a copy</label>
    </div>
    <div class="col-6 col-12-small">
      <input
        type="checkbox"
        id="demo-human"
        name="demo-human"
        checked
      >
      <label for="demo-human">I am a human</label>
    </div>
    <!-- Break -->
    <div class="col-12">
      <textarea
        name="demo-message"
        id="demo-message"
        placeholder="Enter your message"
        rows="6"
      ></textarea>
    </div>
    <!-- Break -->
    <div class="col-12">
      <ul class="actions">
        <li><input
            type="submit"
            value="Send Message"
            class="primary"
          /></li>
        <li><input
            type="reset"
            value="Reset"
          /></li>
      </ul>
    </div>
  </div>
</form>
