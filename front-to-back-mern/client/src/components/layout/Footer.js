import React from 'react';

function Footer() {
  return (
    <footer className="bg-dark text-white mt-5 p-4 text-center">
      Todos os direitos reservados &copy; {new Date().getFullYear()} WTFCode
    </footer>
  );
}

export default Footer;
