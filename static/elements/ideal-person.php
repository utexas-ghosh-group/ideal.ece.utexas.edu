<template id="t">
  <style>
    .img-circle {
      border-radius: 50%;
    }
    
    .photo {
      width: 150px;
      height: 150px;
    }

    .col-sm-3 {
      position: relative;
      min-height: 1px;
     }

    .lead {
      font-size: 16px;
      margin-bottom: 20px;
      font-weight: 200;
      line-height: 1.4;
    }
    
    p {
      margin: 0 0 10px;
    }

    a {
      color: #428bca;
      text-decoration: none;
    }
    
    @media(min-width: 768px) {
      .col-sm-3 {
        width: 25%;
        float: left;
        display: inline-block;
      }
      
      .lead {
        font-size: 21px;
      }
    }
  </style>
  <a id="ideal-person-link" href="/ghosh">
    <div class="col-md-3 col-sm-3">
      <img id="ideal-person-photo" src="/static/images/people/joydeep_ghosh.jpg" class="photo img-circle">
      <p id="ideal-person-name" class="lead"> Joydeep Ghosh </p>
    </div>
  </a>
</template>

<script>
  (function() {
    var importDoc = document.currentScript.ownerDocument; // importee

    // Define and register <ideal-nav>
    // that uses Shadow DOM and a template.
    var proto = Object.create(HTMLElement.prototype);

    proto.createdCallback = function() {
      // get template in import
      var template = importDoc.querySelector('#t');

      var name = (this.getAttribute('name') || 'Name');
      var link = (this.getAttribute('link') || '#');
      var image_src = (this.getAttribute('image-src') || '/static/images/people/no_picture.jpg');

      template.content.querySelector("#ideal-person-link").setAttribute("href", link);
      template.content.querySelector("#ideal-person-photo").setAttribute("src", image_src);
      template.content.querySelector("#ideal-person-name").innerText = name;

      // import template into
      var clone = document.importNode(template.content, true);

      var root = this.createShadowRoot();
      root.appendChild(clone);
    };

    document.registerElement('ideal-person', {prototype: proto});
  })();
</script>
