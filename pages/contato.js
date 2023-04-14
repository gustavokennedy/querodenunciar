import Image from 'next/image'
import { Inter } from 'next/font/google'
import { HiOutlineClipboardDocumentList } from "react-icons/hi2";
import { HiOutlineHeart, HiOutlineChatAlt } from "react-icons/hi";
import { AiOutlineAlert } from "react-icons/ai";


const inter = Inter({ subsets: ['latin'] })

export default function Contato() {
  return (
    <main className="flex min-h-screen flex-col items-center justify-between p-24">
      <div className="z-10 w-full max-w-5xl items-center justify-between font-mono text-sm lg:flex">

	<p className="fixed left-0 top-0 flex w-full justify-center border-b border-blue-300 from-zinc-200 pb-6 pt-8 backdrop-blur-2xl dark:border-neutral-800 dark:bg-zinc-800/30 dark:from-inherit lg:static lg:w-auto  lg:rounded-xl lg:border lg:bg-blue-100 lg:p-4 lg:dark:bg-zinc-800/30">
          Comece criando sua&nbsp;
          <a href="/registrar" alt="Comece criando sua conta" title="Comece criando sua conta"><code className="font-mono font-bold">conta aqui.</code></a>
        </p>

	<div className="fixed bottom-0 left-0 flex h-48 w-full items-end justify-center bg-gradient-to-t from-white via-white dark:from-black dark:via-black lg:static lg:h-auto lg:w-auto lg:bg-none">
		<a
            className="pointer-events-none flex place-items-center gap-2 p-8 lg:pointer-events-auto lg:p-0"
            href="/"
            rel="noopener noreferrer"
		alt="Quero Denunciar"
		title="Quero Denunciar"
          >
                <h1>🚨 Quero Denunciar</h1>
          </a>
        </div>
      </div>

      <div className="place-items-left before:absolute before:h-[300px] before:w-[480px] before:-translate-x-1/2 before:rounded-full  before:to-transparent before:blur-2xl before:content-[''] after:absolute after:-z-20 after:h-[180px] after:w-[240px] after:translate-x-1/3 after:bg-gradient-conic after:from-sky-200 after:via-blue-200 after:blur-2xl after:content-[''] before:dark:bg-gradient-to-br before:dark:from-transparent before:dark:to-blue-700/10 after:dark:from-sky-900 after:dark:via-[#0141ff]/40 before:lg:h-[360px]">
	<h2 className="h2-pages">Fale com a gente</h2>
	<p className="p-pages">Para dúvidas ou sugestões preencha o formulário abaixo:</p>
      </div>

      <div className="mb-32 grid text-center lg:mb-0 lg:grid-cols-4 lg:text-left">

	<a
          href="/logar"
          className="group rounded-lg border border-transparent px-5 py-4 transition-colors hover:border-blue-300 hover:bg-blue-100 hover:dark:border-neutral-700 hover:dark:bg-neutral-800/30"
          rel="noopener noreferrer"
        >
	<h2 className={`${inter.className} mb-3 text-2xl font-semibold`}>
            Denúncias{' '}
            <span className="inline-block transition-transform group-hover:translate-x-1 motion-reduce:transform-none">
              <HiOutlineClipboardDocumentList />
            </span>
          </h2>

         <p
            className={`${inter.className} m-0 max-w-[30ch] text-sm opacity-50`}
          >
            Veja e publique denúncias anônimas em qualquer lugar! Rápido e fácil.
          </p>
        </a>

     <a
          href="/sobre"
          className="group rounded-lg border border-transparent px-5 py-4 transition-colors hover:border-blue-300 hover:bg-blue-100 hover:dark:border-neutral-700 hover:dark:bg-neutral-800 hover:dark:bg-opacity-30"
          rel="noopener noreferrer"
        >
          <h2 className={`${inter.className} mb-3 text-2xl font-semibold`}>
            Sobre{' '}
            <span className="inline-block transition-transform group-hover:translate-x-1 motion-reduce:transform-none">
              <AiOutlineAlert />
            </span>
          </h2>
          <p
            className={`${inter.className} m-0 max-w-[30ch] text-sm opacity-50`}
          >
            Conheça o projeto Quero Denunciar e saiba como tudo foi criado!
          </p>
        </a>

        <a
          href="/ajude"
          className="group rounded-lg border border-transparent px-5 py-4 transition-colors hover:border-blue-300 hover:bg-blue-100 hover:dark:border-neutral-700 hover:dark:bg-neutral-800/30"
          rel="noopener noreferrer"
        >
          <h2 className={`${inter.className} mb-3 text-2xl font-semibold`}>
            Ajude{' '}
            <span className="inline-block transition-transform group-hover:translate-x-1 motion-reduce:transform-none">
              <HiOutlineHeart />
            </span>
          </h2>
          <p
            className={`${inter.className} m-0 max-w-[30ch] text-sm opacity-50`}
          >
            Se você gostou do projeto, saiba como você pode contribuir.
          </p>
        </a>


        <a
          href="/contato"
          className="lg:bg-blue-100 group rounded-lg border border-transparent px-5 py-4 transition-colors hover:border-blue-300 hover:bg-blue-100 hover:dark:border-neutral-700 hover:dark:bg-neutral-800/30"
          rel="noopener noreferrer"
        >
          <h2 className={`${inter.className} mb-3 text-2xl font-semibold`}>
            Contato{' '}
            <span className="inline-block transition-transform group-hover:translate-x-1 motion-reduce:transform-none">
		<HiOutlineChatAlt />
            </span>
          </h2>
          <p
            className={`${inter.className} m-0 max-w-[30ch] text-sm opacity-50`}
          >
            Sugestões, dúvidas e outros comentários, fale com a gente.
          </p>
        </a>

      </div>
    </main>
  )
}
