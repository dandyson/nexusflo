import Swal from "sweetalert2";

// toast.js
const toastMessage = (type, message) => {
    const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000,
      timerProgressBar: true,
      didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
      }
    });
  
    Toast.fire({
      icon: type,
      title: message,
    });
  }
  
  // Export the function so that it can be used in other files
  export { toastMessage };
  