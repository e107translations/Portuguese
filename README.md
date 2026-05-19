# e107 Pacote de Idioma Português v2.3.5

## Ficheiros de Língua PORTUGUESA (Portugal)

- **Revisão**: 1.2
- **Data de lançamento**: 2026-05-19
- **Autor**: KANONimpresor &lt;kanonimpresor@gmail.com&gt;
- **Site**: <https://marketingdeperformance.online/>

---

## DESCRIÇÃO

Este pacote contém os ficheiros de idioma (codificação **UTF-8**) em Português de Portugal para a versão **v2.3.5** do sistema de gestão de conteúdo [e107](https://e107.org). A tradução está alinhada linha a linha com o inglês da mesma versão e foi submetida a uma auditoria completa contra o código-fonte oficial.

> 🆕 **Novidades v2.3.5**
> - Todos os ficheiros `.php` migrados para o novo formato `return [ ... ];` (compatível com o ramo v2.4 sem perder retrocompatibilidade).
> - Cabeçalhos unificados nos 108 ficheiros do pacote.
> - 228 chaves novas adicionadas e traduzidas (incluindo o pacote do plugin `forum`).
> - Codificação normalizada para UTF-8 sem BOM (LF).
> - Remoção de 14 ficheiros obsoletos (plugins descontinuados: `clock_menu`, `log`, `metaweblog`, `tagwords`, `trackback`, etc.).
> - Etiquetas `Q>` / `A>` corrigidas nos 21 ficheiros de `e107_docs/help/Portuguese/`.
> - Correcção de erro de sintaxe em `lan_userposts.php`.
> - 0 chaves obsoletas, 0 desfasamentos de escape, 0 cadeias por traduzir segundo o auditor incluído.

---

## ESTRUTURA DO DIRECTÓRIO

```
├── e107_docs/
│   └── help/Portuguese/      (21 ficheiros de ajuda)
├── e107_languages/
│   └── Portuguese/           (idioma do site)
│       ├── Portuguese.php
│       ├── Portuguese.xml
│       ├── lan_*.php
│       └── admin/            (idioma do painel)
│           ├── lan_*.php
│           └── help/         (ajuda contextual do admin)
└── e107_plugins/<plug>/languages/Portuguese/  (traduções de plugins)
```

---

## INSTRUÇÕES

1. Descarrega o ZIP a partir do botão verde **`<> Code` → `Download ZIP`** ou clona o repositório:
   ```sh
   git clone https://github.com/e107-Kanonimpresor/e107-Portuguese.git
   ```
2. Mantém intacta a estrutura de directórios.
3. Envia os ficheiros por **FTP** ou **cPanel** para a tua instalação de e107, respeitando os caminhos (`e107_languages/Portuguese/...`, `e107_plugins/<plug>/languages/Portuguese/...`, etc.).
4. No painel: `Admin Area → Preferences → Site language` → selecciona **Portuguese**.

> ℹ️ Se a tua instalação é **v2.3.x**, o pacote funciona directamente. Em **v2.4.x** também, graças ao formato `return []`.

---

## CONDIÇÕES DE UTILIZAÇÃO

Estes ficheiros são fornecidos tal como se encontram no arquivo original de distribuição. Podes actualizá-los e alterá-los como entenderes na tua instalação pessoal do e107.

O autor não se responsabiliza por quaisquer erros na base de dados ou ficheiros da tua instalação de e107 resultantes de má instalação ou utilização destes ficheiros.

---

## SUGESTÕES E REPORTES

Apesar de todos os ficheiros terem sido testados numa instalação real de e107, é possível que algum erro tenha passado despercebido (letras trocadas, falta de tradução, contexto pouco natural…).

Se detectares algum erro, abre uma **[Issue](https://github.com/e107-Kanonimpresor/e107-Portuguese/issues)** ou envia um e-mail para <kanonimpresor@gmail.com> indicando:

- Página onde detectaste o erro.
- Expressão ou palavra errada.
- Sugestão de correcção (opcional).

---

## HISTÓRICO

- **v1.2 [2026-05-19]** — Sincronização completa com e107 **v2.3.5**: migração para `return []`, 228 chaves novas, remoção de 14 ficheiros obsoletos, correcção de codificação, escapes `\n`, etiquetas `Q>/A>` no help, cabeçalhos unificados, fix de sintaxe em `lan_userposts.php`, auditoria 0 erros.
- **v1.1 [2025-05-04]** — Revisão menor.
- **v1.0 [2025-05-04]** — Primeiro lançamento oficial da tradução PT-PT UTF-8 (v2.3.3).

---

## LICENÇA

e107 Pacote de Idioma Português v2.3.5 — lançado nos termos e condições da [GNU General Public License](http://www.gnu.org/licenses/gpl.txt).

**[EOF]**
