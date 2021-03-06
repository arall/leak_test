#include <openssl/evp.h>

EVP_bf_cbc(); // Noncompliant: 64-bit size block
EVP_cast5_cbc(); // Noncompliant: 64-bit size block
EVP_des_cbc(); // Noncompliant: DES works with 56-bit keys allow attacks via exhaustive search
EVP_idea_cbc(); // Noncompliant: 64-bit size block
EVP_rc4(); // Noncompliant:  has numerous design flaws which make it hard to use correctly
EVP_rc2_cbc(); // Noncompliant: RC2 is vulnerable to a related-key attack